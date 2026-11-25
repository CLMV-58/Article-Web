<?php

namespace App\Laravel\Controllers\Portal\CMS;

use App\Http\Controllers\Controller;

use App\Laravel\Requests\PageRequest;

use App\Laravel\Models\CMS\CMSAbout;

use App\Laravel\Requests\Portal\AdminAccountRequest;

use DB; // use Illuminate\support\facades\DB;

class AboutCMSController extends Controller{
    public function __construct()
    {

    }

    public function index(PageRequest $request)
    {
        $this->data['page_title'] = "About CMS";
        return view('portal.cms.about', $this->data);
    }

    public function store(PageRequest $request)
    {
        DB::beginTransaction();

        try {
            $cms = new CMSAbout();
            $cms->title1 = ($request->input('title1'));
            $cms->content1 = ($request->input('content1'));
            $cms->title2 = ($request->input('title2'));
            $cms->content2 = ($request->input('content2'));
            $cms->title3 = ($request->input('title3'));
            $cms->content3 = ($request->input('content3'));
            $cms->save();

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Successfully registered.");
            return redirect()->route('portal.cms.about');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server failed. Please try again later.");
            return redirect()->back();
        }
    }
}