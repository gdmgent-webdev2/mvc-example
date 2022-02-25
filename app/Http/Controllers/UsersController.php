<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Providers\View;

class UsersController {

    public function index() {
        $users = User::where('firstname', 'LIKE', '%e%')->orderBy('firstname')->get();

        $view = View::display('dashboard.php', [
            'users' => $users
        ]);
        return $view;
    }

    public function show($userId) {

        $user = User::findOrFail($userId);

        return View::display('user.php', $user);
        // show specific user by id
    }

}