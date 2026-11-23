<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Requests\PageRequest;

use App\Laravel\Models\User;

use App\Laravel\Requests\Portal\AdminAccountRequest;

use DB; // use Illuminate\support\facades\DB;

class AccountManagementController extends Controller{
    public function __construct()
    {
        $this->data['page_title'] = "Account Management";
    }

    public function index(PageRequest $request){

        $this->data['records'] = User::get();

        return view('portal.account-management.index', $this->data);
    }

    public function show(PageRequest $request, $id = null){
        $this->data['record'] = User::find($id);
        return view('portal.account-management.show', $this->data);
    }

    public function create(PageRequest $request){
        return view('portal.account-management.create', $this->data);
    }

    public function edit(PageRequest $request, $id = null){
        $this->data['record'] = User::find($id);
        return view('portal.account-management.edit', $this->data);
    }

    public function store(AdminAccountRequest $request){
        DB::beginTransaction();

        try {
            $user = new User();
            $user->email = strtolower($request->input('email'));
            $user->first_name = strtoupper($request->input('first_name'));
            $user->last_name = strtoupper($request->input('last_name'));
            $user->username = strtoupper($request->input('username'));
            $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully registered. Please login to continue.");
            return redirect()->route('portal.account-management.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }

    public function update(AdminAccountRequest $request, $id = null){
        DB::beginTransaction();

        try {
            $user = User::find($id);
            $user->email = strtolower($request->input('email'));
            $user->first_name = strtoupper($request->input('first_name'));
            $user->last_name = strtoupper($request->input('last_name'));
            $user->username = strtoupper($request->input('username'));
            $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully updated account.");
            return redirect()->route('portal.account-management.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }
}