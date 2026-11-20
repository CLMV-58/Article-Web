<?php

namespace App\Laravel\Controllers\Backoffice;

use App\Laravel\Requests\PageRequest;

use App\Laravel\Models\User;

use App\Laravel\Requests\Backoffice\AdminAccountRequest;

use DB; // use Illuminate\support\facades\DB;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->data['page_title'] = "User Management";
    }

    public function index(PageRequest $request)
    {
        $this->data['records'] = User::get();
        return view('backoffice.user-management.index', $this->data);
    }

    public function show(PageRequest $request, $id = null)
    {
        $this->data['record'] = User::find($id);
        return view('backoffice.user-management.show', $this->data);
    }

    public function edit(PageRequest $request, $id = null){
        $this->data['record'] = User::find($id);
        return view('backoffice.user-management.edit', $this->data);
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
            return redirect()->route('backoffice.user-management.index');
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
            return redirect()->route('backoffice.user-management.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }

    public function delete(PageRequest $request, $id = null)
    {
        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('notification-status', "success");
        session()->flash('notification-msg', "User account successfully deleted.");
        return redirect()->route('backoffice.user-management.index');
    }
}
