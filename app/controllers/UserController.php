<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/User.php';

class UserController extends Controller
{
    public function index()
    {
        $user = new User();
        $users = $user->all();

        $this->view('user/index', [
            'users' => $users
        ]);
    }
}
