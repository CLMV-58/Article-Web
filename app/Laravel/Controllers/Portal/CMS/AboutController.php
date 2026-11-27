<?php

namespace App\Laravel\Controllers\Portal\CMS;

use App\Http\Controllers\Controller;
use App\Laravel\Requests\PageRequest;
use App\Laravel\Models\CMS\About;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\facades\DB;

class AboutController extends Controller{

    protected array $sections = [
        'card1_header', 'card1_body',
        'card2_header', 'card2_body',
        'card3_header', 'card3_body',
    ];

    public function index(PageRequest $request)
    {
        $this->data['page_title'] = "About CMS";
        $this->data['contents'] = About::where('user_id', Auth::guard('user')->id())
            ->whereIn('section', $this->sections)
            ->pluck('content','section');

        return view('portal.cms.about', $this->data);
    }

    public function store(PageRequest $request)
    {
        DB::beginTransaction();

        try {
            $userId = Auth::guard('user')->id();

            foreach ($request->only($this->sections) as $section => $content) {
                About::updateOrCreate(
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
            return redirect()->route('portal.cms.about');
        } catch (\Exception $e) {
            // dd($e);
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server failed. Please try again later.");
            return redirect()->back();
        }
    }
}