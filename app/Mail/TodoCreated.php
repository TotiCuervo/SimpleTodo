<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TodoCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $todo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($todo)
    {
        return $this->todo = $todo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.todo-created');
    }
}
