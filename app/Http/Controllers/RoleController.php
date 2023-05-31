<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $data = Role::all();

        return view('admin.role.index', compact('data'));
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {
        $role = Role::create([
            'name' => $request->name
        ]);

        return redirect()->route('role.index');
    }

    public function edit($id)
    {
        $role = Role::find($id);

        return view('admin.role.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update([
            'name' => $request->name
        ]);
        return redirect()->route('role.index');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        return redirect()->route('role.index');
    }
}
