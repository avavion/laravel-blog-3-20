<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $users = [
            [
                "id" => 1,
                "username" => "avavion"
            ],
            [
                "id" => 2,
                "username" => "vazgen"
            ]
        ];

        $user = [
            "id" => 1,
            "username" => "Алан"
        ];

        return view('index', compact('user', 'users'));
    }
}
