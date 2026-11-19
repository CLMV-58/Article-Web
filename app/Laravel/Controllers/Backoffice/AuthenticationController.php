<?php

namespace App\Laravel\Controllers\Backoffice;

use App\Laravel\Requests\PageRequest;

use App\Laravel\Models\Admin;

use App\Laravel\Requests\Backoffice\AdminAccountRequest;

use DB; // use Illuminate\support\facades\DB;

class AuthenticationController extends Controller{
    public function __construct()
    {

    }

    public function login(PageRequest $request){
        $this->data['page_title'] = "Login Page";
        return view('backoffice.auth.login', $this->data);
    }

    public function authenticate(PageRequest $request){
        $credentials = $request->only('email','password');

        if (!auth('admin')->attempt($credentials)) {
            session()->flash('notification-status',"failed");
            session()->flash('notification-msg',"Invalid credentials. Please try again.");
            return redirect()->back();
        } else {
            session()->flash('notification-status',"success");
            session()->flash('notification-msg',"Successfully logged in. Welcome back!");
            return redirect()->route('backoffice.dashboard');
        }
    }

    public function register(PageRequest $request){
        $this->data['page_title'] = "Registration Page";
        return view('backoffice.auth.register', $this->data);
    }

    public function store(AdminAccountRequest $request){
        DB::beginTransaction();

        try {
            $user = new Admin();
            $user->email = strtolower($request->input('email'));
            $user->first_name = strtoupper($request->input('first_name'));
            $user->last_name = strtoupper($request->input('last_name'));
            $user->username = strtoupper($request->input('username'));
            $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully registered. Please login to continue.");
            return redirect()->route('backoffice.auth.login');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }

    public function logout(PageRequest $request){;
        auth('admin')->logout();
        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "Logged out successfully. Session closed.");
        return redirect()->route('backoffice.auth.login');
    }

}