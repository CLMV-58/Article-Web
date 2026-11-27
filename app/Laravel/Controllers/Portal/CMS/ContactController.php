<?php

namespace App\Laravel\Controllers\Portal\CMS;

use App\Http\Controllers\Controller;
use App\Laravel\Requests\PageRequest;
use App\Laravel\Models\CMS\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\facades\DB;

class ContactController extends Controller{

    protected array $sections = [
        'contact_number',
        'contact_email',
        'contact_address',
    ];

    public function index(PageRequest $request)
    {
        $this->data['page_title'] = "Contact CMS";
        $this->data['contents'] = Contact::where('user_id', Auth::guard('user')->id())
            ->whereIn('section', $this->sections)
            ->pluck('content','section');

        return view('portal.cms.contact', $this->data);
    }

    public function store(PageRequest $request)
    {
        DB::beginTransaction();

        try {
            $userId = Auth::guard('user')->id();

            foreach ($request->only($this->sections) as $section => $content) {
                Contact::updateOrCreate(
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
            return redirect()->route('portal.cms.contact');
        } catch (\Exception $e) {
            // dd($e);
            DB::rollback();
            session()->flash('notification-status', "failed");
            session()->flash('notification-msg', "Server failed. Please try again later.");
            return redirect()->back();
        }
    }
}