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
        return Socialite::driver($provider)->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(SocialAccountService $service, $provider)
    {
        $user = $service->createOrGetUser(Socialite::driver($provider)->user(), $provider);
        
        // $profile = Developer::where('user_id', $user->id)->first();
        // if($profile){
        //     auth()->login($user);
        //     return redirect()->to('developer/dashboard');
        // }
        session(['user' => $user]);
        return redirect()->to('home');
    }
}