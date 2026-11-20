<?php

namespace App\Laravel\Controllers\Backoffice;

use App\Laravel\Requests\PageRequest;

use App\Laravel\Models\Admin;

use App\Laravel\Requests\Backoffice\AdminAccountRequest;

use DB; // use Illuminate\support\facades\DB;

class AccountManagementController extends Controller{
    public function __construct()
    {
        $this->data['page_title'] = "Account Management";
    }

    public function index(PageRequest $request){

        $this->data['records'] = Admin::get();
        return view('backoffice.account-management.index', $this->data);
    }

    public function show(PageRequest $request, $id = null){
        $this->data['record'] = Admin::find($id);
        return view('backoffice.account-management.show', $this->data);
    }

    public function create(PageRequest $request){
        return view('backoffice.account-management.create', $this->data);
    }

    public function edit(PageRequest $request, $id = null){
        $this->data['record'] = Admin::find($id);
        return view('backoffice.account-management.edit', $this->data);
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
            return redirect()->route('backoffice.account-management.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }

    public function update(PageRequest $request, $id = null){
        DB::beginTransaction();

        try {
            $user = Admin::find($id);
            $user->email = strtolower($request->input('email'));
            $user->first_name = strtoupper($request->input('first_name'));
            $user->last_name = strtoupper($request->input('last_name'));
            $user->username = strtoupper($request->input('username'));
            $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully updated account.");
            return redirect()->route('backoffice.account-management.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }

    public function delete(PageRequest $request, $id = null)
    {
        $user = Admin::findOrFail($id);
        $user->delete();

        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "User account successfully deleted.");
        return redirect()->route('backoffice.account-management.index');
    }

}