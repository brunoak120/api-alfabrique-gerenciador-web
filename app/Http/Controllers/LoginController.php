<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function login(Request $request) {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'nivel_acesso_id' => config('constants.ADMIN')])) {
            return redirect()->route('admin.index');
        }

        flash('E-mail ou senha incorretos.')->error();
        return redirect()->back();

    }
}