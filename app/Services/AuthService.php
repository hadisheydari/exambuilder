<?php
namespace App\Services;
use App\Repositories\UserRepository ;
use Illuminate\Support\Facades\Auth;

class AuthService {
    protected $userRepo;
    public function __construct()
    {
        $this->userRepo = new UserRepository();
    }
    public function register(array $data): array
    {
        $user = $this->userRepo->FindOrCreste($data);
        if ($user->wasRecentlyCreated) {
            Auth::login($user);
            return ['status' => 'created' , 'role' => $user->role];
        }
        return ['status' => 'exist' ];


    }
}
