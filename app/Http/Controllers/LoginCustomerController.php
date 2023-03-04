<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginCustomerController extends Controller
{
    public function loginForm()
    {
        return view('pages.customer.login');
    }
    public function login(Request $request)
    {
        //VALIDASI DATA YANG DITERIMA
        $this->validate($request, [
            'email' => 'required|email|exists:customers,email',
            'password' => 'required|string'
        ]);

        $auth = $request->only('email', 'password');
        $auth['status'] = 1;

        if (auth()->guard('customer')->attempt($auth)) {

            return redirect()->route('customer.dashboard');
        }

        return redirect()->back()->with(['error' => 'Email / Password Salah']);
    }
    public function dashboard()
    {
        return view('pages.customer.dashboard');
    }

    public function logout()
    {
        auth()->guard('customer')->logout();
        return redirect(route('customer.login'));
    }
}
