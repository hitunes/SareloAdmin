<?php
namespace App\Services;

use App\User;
use App\SocialAccount;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Contracts\User as ProviderUser;


//dont remmeber to set up twitter ouath to return email address
class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser, $provider)
    {
        $account = SocialAccount::whereProvider($provider)
                                ->whereProviderUserId($providerUser->getId())
                                ->first();
        if ($account) {
                return $account->user;
            }
            else {

                $account = new SocialAccount([
                    'provider_user_id' => $providerUser->getId(),
                    'provider' => $provider
                ]);
                if(!$providerUser->getEmail())
                    return redirect('/login')->with(['status' => 'error', 'message' => 'No email found in your social account']);


                $user = User::whereEmail($providerUser->getEmail())->first();

                if (!$user) {
                    $name = explode(" ", $providerUser->getName());

                    $user = User::create([
                        'email' => $providerUser->getEmail(),
                        'first_name' => $name[0],
                        'last_name' => isset($name[1])? $name[1] : "",
                    ]);
                }
                $account->user()->associate($user);

                $account->save();

                return $user;
        }
    }
}