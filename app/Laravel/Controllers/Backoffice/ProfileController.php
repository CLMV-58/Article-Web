<?php

namespace App\Laravel\Controllers\Backoffice;

use App\Laravel\Requests\PageRequest;

use App\Laravel\Models\Admin;

use App\Laravel\Requests\Backoffice\AdminAccountRequest;

use App\Laravel\Requests\Backoffice\EditProfileRequest;

use DB; // use Illuminate\support\facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->data['page_title'] = "Profile Management";
    }

    public function index(){
        $this->data['$record'] = auth('admin')->user();

        return view('backoffice.profile.index', $this->data);
    }

    public function edit(PageRequest $request, $id = null){
        $this->data['$record'] = auth('admin')->user();

        return view('backoffice.profile.edit', $this->data);
    }

    public function update(EditProfileRequest $request){
        DB::beginTransaction();

        try {
            $user = auth('admin')->user();
            $user->email = strtolower($request->input('email'));
            $user->first_name = strtoupper($request->input('first_name'));
            $user->last_name = strtoupper($request->input('last_name'));
            $user->username = strtoupper($request->input('username'));
            $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully updated your details.");
            return redirect()->route('backoffice.profile.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server error. Please try again later.");
            return redirect()->back();
        }
    }
}
