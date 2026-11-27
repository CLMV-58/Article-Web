<?php

namespace App\Laravel\Controllers\Portal\CMS;

use App\Http\Controllers\Controller;
use App\Laravel\Requests\PageRequest;
use App\Laravel\Models\CMS\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\facades\DB;

class HomeController extends Controller{

    protected array $sections = [
        'hero_heading',
        'hero_subheading',
        'hero_button',
        'feat_heading',
        'feat_subheading',
        'feat_c1heading',
        'feat_c1body',
        'feat_c2heading',
        'feat_c2body',
        'feat_c3heading',
        'feat_c3body',
    ];

    public function index(PageRequest $request)
    {
        $this->data['page_title'] = "Home CMS";
        $this->data['contents'] = Home::where('user_id', Auth::guard('user')->id())
            ->whereIn('section', $this->sections)
            ->pluck('content','section');

        return view('portal.cms.home', $this->data);
    }

    public function store(PageRequest $request)
    {
        DB::beginTransaction();

        try {
            $userId = Auth::guard('user')->id();

            foreach ($request->only($this->sections) as $section => $content) {
                Home::updateOrCreate(
                    [
                        'user_id' => $userId, 
                        'section' => $section],
                    [
                        'content' => $content,
                    ]
                );
            }

            DB::commit();

            session()->flash('notification-status', "success");
            session()->flash('notification-msg', "Content saved successfully.");
            return redirect()->route('portal.cms.home');
        } catch (\Exception $e) {
            // dd($e);
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server failed. Please try again later.");
            return redirect()->back();
        }
    }
}