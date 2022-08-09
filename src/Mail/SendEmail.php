<?php

namespace Uasoft\Badaso\Theme\LandyTheme\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->request->email)
        ->view('landy-theme::components.landy-layout-form')
        ->with(
            [
                'name' => $this->request->name,
                'phone' => $this->request->phone,
                'email' => $this->request->email,
                'subject' => $this->request->subject,
                'messages' => $this->request->message,
            ]
        );
    }
}
