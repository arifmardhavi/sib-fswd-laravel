<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('dashboard');
    }

    public function create(): View
    {
        return view('create');
    }

    public function show($data = null): View
    {
        return view('detail');
    }

    public function edit($data = null): View
    {
        return view('edit');
    }

    public function destroy($data = null): View
    {
        return view('create');
    }
}
