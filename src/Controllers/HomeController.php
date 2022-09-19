<?php

namespace Uasoft\Badaso\Theme\LandyTheme\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Uasoft\Badaso\Helpers\ApiResponse;
use Uasoft\Badaso\Theme\LandyTheme\Mail\SendEmail;
use Uasoft\Badaso\Theme\LandyTheme\Mail\SubsribeMail;

class HomeController extends Controller
{
    public function index()
    {
        return view('landy-theme::pages.landing-page');
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
