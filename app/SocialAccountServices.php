<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountServices
{
    public function findOrCreate(ProviderUser $providerUser, $provider){//$provider would be facebook in our case
        $account = LinkedSocialAccount::where('provider_name', $provider)
                   ->where('provider_id', $providerUser->getId())
                   ->first();

        if ($account) {
            return $account->user;
        } else {

        $user = User::where('email', $providerUser->getEmail())->first();

        if (! $user) {
            $user = User::create([  
                'email' => $providerUser->getEmail(),
                'name'  => $providerUser->getName(),
                'social_provider'  => $provider,
            ]);
        }

        $user->accounts()->create([
            'provider_id'   => $providerUser->getId(),
            'provider_name' => $provider,
        ]);

        return $user;

        }
    }
}