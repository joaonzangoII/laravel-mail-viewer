<?php

namespace JoaonzangoII\MailViewer\Tests\Stubs\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmailWithDependencies extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $arr, \stdClass $someObject, string $name, int $number, $nonTypeHintedVar)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mailviewer::stubs.emailtestview');
    }
}
