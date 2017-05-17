<?php
namespace App\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;

use App\SocialAccount;

use App\User;

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
                    throw new Exception("Something went wrong (email not found) <br><a href='/login'>Login again</a>", 1);

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