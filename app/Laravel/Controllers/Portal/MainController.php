<?php

namespace App\Laravel\Controllers\Portal;

use App\Laravel\Requests\PageRequest;

class MainController extends Controller{
    public function __construct()
    {

    }

    public function index(PageRequest $request){
        $this->data['page_title'] = "Profile";
        return view('portal.profile.index', $this->data);
    }

    public function articles(PageRequest $request){
        $this->data['page_title'] = "Articles";
        return view('portal.cms.articles', $this->data);
    }

    public function home(PageRequest $request){
        $this->data['page_title'] = "Home Page";
        return view('portal.cms.home', $this->data);
    }

    public function about(PageRequest $request){
        $this->data['page_title'] = "About Page";
        return view('portal.cms.about', $this->data);
    }
    public function contact(PageRequest $request){
        $this->data['page_title'] = "Contact Page";
        return view('portal.cms.contact', $this->data);
    }

}
