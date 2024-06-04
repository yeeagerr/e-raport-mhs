<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function update_show()
    {
        $user = session("user");
        return view("Pages.admin.update", compact('user'));
    }


    public function update_post(Admin $id, Request $request)
    {
        if ($request->password) {
            $id->update([
                'username' => $request->username,
                'password' => Hash::make($request->password)
            ]);
        }

        $id->update([
            'username' => $request->username
        ]);

        session(['user' => $id->first()]);

        return redirect()->route('dashboard');
    }

    public function input_nilai(Siswa $id)
    {
        $user = session("user");
        return view("Pages.admin.update_input", compact('user', 'id'));
    }
}
