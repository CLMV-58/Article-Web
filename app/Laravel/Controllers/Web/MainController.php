<?php

namespace App\Laravel\Controllers\Web;

use App\Laravel\Requests\PageRequest;

class MainController extends Controller{
    public function __construct()
    {

    }

    public function index(PageRequest $request){
        $this->data['page_title'] = "Home Page";
        return view('web.home', $this->data);
    }

    public function about(PageRequest $request){
        $this->data['page_title'] = "About Page";
        return view('web.about', $this->data);
    }

    public function listing(PageRequest $request){
        $this->data['page_title'] = "Articles Listing";
        return view('web.listing', $this->data);
    }

    public function contact(PageRequest $request){
        $this->data['page_title'] = "Contact Page";
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
