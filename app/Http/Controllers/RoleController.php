<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $data = [
            [
                "id" => 'RL-1',
                "role" => 'admin'
            ],
            [
                "id" => 'RL-2',
                "role" => 'user'
            ]
        ];

        return view('admin.role.index', compact('data'));
    }
}
