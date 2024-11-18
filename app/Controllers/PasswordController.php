<?php

namespace App\Controllers;

class PasswordController extends BaseController
{
    public function index()
    {
        return view('password_generator');
    }

    public function generate()
    {
        $length = $this->request->getPost('length') ?? 12;
        $password = $this->generatePassword($length);
        return view('password_generator', ['password' => $password]);
    }

    private function generatePassword($length = 12)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyz!@#$%^&*()_+[]{}ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, strlen($chars) - 1)];
        }
        return $password;
    }
}
