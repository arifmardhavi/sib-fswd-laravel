<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $data = [
            [
            "name" => "Rivera",
            "email" => "j_rivera@aol.com",
            "phone" => "+16108448881",
            "role" => "user"
            ],
            [
            "name" => "Miller",
            "email" => "b.miller@outlook.com",
            "phone" => "+19184491014",
            "role" => "admin"
            ],
            [
            "name" => "Watson",
            "email" => "mateo.watson@hotmail.com",
            "phone" => "+19149830916",
            "role" => "user"
            ],
            [
            "name" => "Martinez",
            "email" => "isaac.lee@aol.com",
            "phone" => "+12012879200",
            "role" => "user"
            ],
            [
            "name" => "Jackson",
            "email" => "a.k.jackson@ymail.com",
            "phone" => "+17150870001",
            "role" => "admin"
            ],
            [
            "name" => "Jones",
            "email" => "a.jones@rocketmail.com",
            "phone" => "+15805382430",
            "role" => "user"
            ],
            [
            "name" => "Patterson",
            "email" => "ampatterson@live.com",
            "phone" => "+17319537871",
            "role" => "user"
            ],
            [
            "name" => "Young",
            "email" => "m.young47@live.com",
            "phone" => "+19153440629",
            "role" => "user"
            ],
            [
            "name" => "Hayes",
            "email" => "j_c_hayes@outlook.com",
            "phone" => "+17725872254",
            "role" => "admin"
            ],
            [
            "name" => "Roberts",
            "email" => "m.roberts@live.com",
            "phone" => "+12705646150",
            "role" => "user"
            ]
        ];

        return view('admin.user.index', compact('data'));
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
