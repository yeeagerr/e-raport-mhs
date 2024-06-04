<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PubController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = session("user");
        return view("Pages.Dashboard")->with(compact('user'));
    }
}
