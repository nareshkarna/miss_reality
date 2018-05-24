<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialAccountController extends Controller
{
    //
     /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider){
        return \Socialite::driver($provider)->redirect();
        //return \Socialite::driver($provider)->scopes(['users:email'])->redirect();
    }

    /**
     * Obtain the user information
     *
     * @return Response
     */
    public function handleProviderCallback(\App\SocialAccountServices $accountService, $provider){

        try {
            $user = \Socialite::with($provider)->user();
            echo "<pre>";print_r($user);echo "</pre>";die;
            //$user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
        	//echo "exception caught :".$e;die;
            return redirect('/login');
        }

        $authUser = $accountService->findOrCreate(
            $user,
            $provider
        );

        auth()->login($authUser, true);

        return redirect()->to('/home');
    }
}

