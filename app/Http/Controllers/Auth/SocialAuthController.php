<?php
namespace App\Http\Controllers\Auth;

use Socialite;

use App\Http\Controllers\Controller;

use Session;

use App\Services\SocialAccountService;

use App\User;

class SocialAuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        // dd();
        return Socialite::driver($provider)->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(SocialAccountService $service, $provider)
    {
        $user = $service->createOrGetUser(Socialite::driver($provider)->stateless()->user(), $provider);

        if($user instanceof User){
            auth()->login($user);

            return redirect()->to('/my-account');
        }

        return redirect('/login')->with(['status' => 'error', 'message' => 'No Email/Name found in social account']);
    }
}