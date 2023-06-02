<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public final function authLogin(Request $request)
    {
        if ($request->input('submit') === 'sensei')
            return redirect('/OkeBang');
        else if ($request->input('submit') === 'sekretaris')
            return redirect('/NjirLuh');
    }
}
