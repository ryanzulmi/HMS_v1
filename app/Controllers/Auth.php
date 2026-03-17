<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)
                          ->where('is_active', 1)                    
                          ->first();

        if(!$user){
            return redirect()->back()->with('error', 'User tidak ditemukan');
        }

        if(!password_verify($password, $user['password'])){
            return redirect()->back()->with('error', 'Password salah');
        }

        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            $session->set([
                'isLoggedIn' => true,
                'username'   => $user['username'],
                'role'       => $user['role'],
                'user_id'    => $user['id']
            ]);

            return redirect()->to('/dashboard');
            
        } else {
            // Login failed
            $session->setFlashdata('error', 'Invalid username or password');
            return redirect()->to('/login');
        }

        
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}