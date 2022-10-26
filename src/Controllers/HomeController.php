<?php

namespace Uasoft\Badaso\Theme\LandyTheme\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Uasoft\Badaso\Helpers\ApiResponse;
use Uasoft\Badaso\Theme\LandyTheme\Mail\SendEmail;
use Uasoft\Badaso\Theme\LandyTheme\Mail\SubsribeMail;
use Uasoft\Badaso\Theme\LandyTheme\Helpers\Configurations;

class HomeController extends Controller
{
    public $prefix = 'badaso.theme.landy-theme';

    public function index()
    {
        $config = Configurations::index();
        $title = $config->siteTitle;

        $view = 'landy-theme::pages.landing-page';
        if (view()->exists($this->prefix . '.pages.landing-page')) {
            $view = $this->prefix . '.pages.landing-page';
        };
        return view($view, ['title' => $title]);
    }

    public function sendEmail(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string',
                'email' => 'required|string|email|max:255|',
                'subject' => 'required|string',
                'message' => 'required|string',
            ]);
            $email_company = env('LANDY_MAIL_RECEIVER');
            Mail::to($email_company)->send(new SendEmail($request));

            return ApiResponse::success();
        } catch (Exception $e) {

            return ApiResponse::failed($e);
        }
    }

    public function subscribe(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email|max:255|',
            ]);

            $email_company = env('LANDY_MAIL_RECEIVER');
            Mail::to($email_company)->send(new SubsribeMail($request));

            return ApiResponse::success();
        } catch (Exception $e) {

            return ApiResponse::failed($e);
        }
    }
}
