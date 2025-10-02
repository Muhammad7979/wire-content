<?php 

namespace App\Actions\Social;

use App\Actions\Social\Contracts\CreateUser;
use App\Models\User;

class CreateXUser implements CreateUser{

    public function create($user): User
    {
 
       //TODO: Implement create method
       return User::firstOrCreate([
         'x_id' => $user->getId(),
       ],[
        'name'=>$user->getName(),
        'email'=>$user->getEmail(),
        'profile_photo_path'=>$user->getAvatar(),
       ]);

    }
}
