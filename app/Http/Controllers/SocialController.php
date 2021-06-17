<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use Validator,Redirect,Response,File;
 use Socialite;
 use App\User;
 class SocialController extends Controller
 {
    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback($provider)
    {
      $getInfo = Socialite::driver($provider)->user(); 
    //   $user = $this->createUser($getInfo,$provider); 
    //   auth()->login($user); 
    //   return redirect()->to('/luis');
    // }
    // function createUser($getInfo,$provider){
    // $user = User::where('provider_id', $getInfo->id)->first();
    // if (!$user) {
    //       $user = User::create([
    //         'name'     => $getInfo->name,
    //         'email'    => $getInfo->email,
    //         'provider' => $provider,
    //         'provider_id' => $getInfo->id
    //     ]);
    //   }
    //   return $user;
    }
    }