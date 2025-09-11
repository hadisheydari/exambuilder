<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\AuthService;

class UserController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {

        $authService = new AuthService();
        $result = $authService->register($request->validated());
        return match ($result['status']) {
            'created' => match($result['role']){
                'teacher' => redirect()->route('Teacher_dashboard'),
                'student' => redirect()->route('Student_dashboard'),
            },
            'exist'=>redirect()->route('login')->with('wrong', 'User already exists'),
        };
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return redirect()->route('register')->with('wrong', 'Invalid credentials');

        }

        $request->session()->regenerate();

        return redirect()->route('dashboard')->with('success', 'Login successful');
    }
}
