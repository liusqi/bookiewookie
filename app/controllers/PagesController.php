<?php

class PagesController extends \BaseController {

	public function index()
	{
        return View::make('pages.index');
	}

    public function about() {
        return View::make('pages.about');
    }

    public function contact() {
        return View::make('pages.contact');
    }

    public function bookexchange() {
        return View::make('pages.bookexchange');
    }

    public function faq() {
        return View::make('pages.faq');
    }

    public function resources() {
        return View::make('pages.resources');
    }

    public function privacy() {
        return View::make('pages.privacy');
    }

    public function termbook() {
        return View::make('pages.termbook');
    }



}
