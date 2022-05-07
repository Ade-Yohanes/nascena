<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }

    public function __construct($data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('skybamms@gmail.com')
                ->markdown('frontend.quoteMailform')
                ->attachFromStorage($this->user['file'])
                ->with([
                        'title' => $this->user['title'],
                        'name' => $this->user['name'],
                        'company' => $this->user['company'],
                        'phone' => $this->user['phone'],
                        'email' => $this->user['email'],
                        'description' => $this->user['description'],
                        // 'file' => $this->user['file'],

                    ]);



                    



        // return $this->markdown('frontend.quoteMailform');
    }
}
