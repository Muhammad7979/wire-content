<?php
namespace App\Factories\Social;

use App\Actions\Social\CreateXUser;

class CreateUserFactories{

/**
 * @throws \Exception
 */


    public function forService(string $service){
        return match($service){
            'twitter' => new CreateXUser(),
            default => throw new \Exception('Unsupported service')
        };
    }
}
