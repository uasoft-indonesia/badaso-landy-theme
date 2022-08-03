<?php

namespace Uasoft\Badaso\Theme\LandyTheme\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('landy-theme::pages.content');
    }
}
