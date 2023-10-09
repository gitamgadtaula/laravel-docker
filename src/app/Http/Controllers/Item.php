<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Item extends Controller
{
    public function index()
    {
        $user = [
            'name' => 'Rasu',
            'email' => 'rasu@example.com',
        ];

        return response()->json($user);
    }
}
