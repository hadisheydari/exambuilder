<?php
namespace App\Repositories;

use App\Models\User;
class UserRepository{
    public function FindOrCreste(array $data): User
    {
        return User::firstOrCreate(
            ['email' => $data['email']],
            $data
        );
    }
}
