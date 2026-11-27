<?php

namespace App\Laravel\Controllers\Web;

use App\Laravel\Requests\PageRequest;
use App\Laravel\Models\CMS\About;
use App\Laravel\Models\CMS\Home;
use App\Laravel\Models\CMS\Contact;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller{
    public function __construct()
    {

    }

    public function index(PageRequest $request){
        $this->data['page_title'] = "Home Page";

        $userId = Auth::guard('user')->id();

        $this->data['contents'] = $userId
            ? Home::where('user_id', $userId)
                ->get()
                ->keyBy('section')
            : collect();

        return view('web.home', $this->data);
    }

    public function about(PageRequest $request){
        $this->data['page_title'] = "About Page";

        $userId = Auth::guard('user')->id();

        $this->data['contents'] = $userId
            ? About::where('user_id', $userId)
                ->get()
                ->keyBy('section')
            : collect();

        return view('web.about', $this->data);
    }

    public function listing(PageRequest $request){
        $this->data['page_title'] = "Articles Listing";
        return view('web.listing', $this->data);
    }

    public function contact(PageRequest $request){
        $this->data['page_title'] = "Contact Page";

        $userId = Auth::guard('user')->id();

        $this->data['contents'] = $userId
            ? Contact::where('user_id', $userId)
                ->get()
                ->keyBy('section')
            : collect();

        return view('web.contact', $this->data);
    }

    public function article1(PageRequest $request){
        $this->data['page_title'] = "Article 1";
        return view('web.article1', $this->data);
    }

    public function article2(PageRequest $request){
        $this->data['page_title'] = "Article 2";
        return view('web.article2', $this->data);
    }

    public function article3(PageRequest $request){
        $this->data['page_title'] = "Article 3";
        return view('web.article3', $this->data);
    }

}
