<?php

namespace Uasoft\Badaso\Theme\LandyTheme\Controllers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Uasoft\Badaso\Helpers\ApiResponse;
use Uasoft\Badaso\Theme\LandyTheme\Mail\SendEmail;


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
            $email_company = env('MAIL_FROM_ADDRESS');
            Mail::to($email_company)->send(new SendEmail($request));

            return ApiResponse::success();
        } catch (Exception $e) {

            return ApiResponse::failed($e);
        }
    }

}
