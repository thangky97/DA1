<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $messages = [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email chưa đúng định dạng name@gmail.com',
            'password' => 'Password không được để trống',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('login')->withErrors($validator); //lấy ra tất cả các lỗi
        } else {
            $email = $request->input('email');
            $password = $request->input('password');
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect('admin');
            } else {
                Session::flash('error', 'Sai email và password');
                return redirect('login');
            }
        }
    }

    public function getLogout() {
        Auth::logout();
        return redirect('login');
    }
}
