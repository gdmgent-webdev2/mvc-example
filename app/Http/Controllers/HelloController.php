<?php
namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Providers\View;

class HelloController {
    
    public function showDutchHello() {

        $users = User::where('firstname', 'wout')->first();

        return View::display('hello.php');
    }

    public function showFrenchHello() {
        return View::display('hello.php');
    }
}