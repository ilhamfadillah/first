<?php

namespace App\Services;
use App\SocialFacebookAccount;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialFacebookAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        
        $account = SocialFacebookAccount::where('provider','facebook')
            //->where('provider_user_id',$providerUser->getId())
            ->first();
            var_dump($account); exit();
        if ($account) {
            return $account->user;
        } else {

            $account = new SocialFacebookAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'username' => $providerUser->getName(),
                    'password' => bcrypt('secret'),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}
