<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactFormRecipient extends Model
{
    use HasFactory, Notifiable;

    protected $recipient;
    protected $email;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->recipient = env('MAIL_RECIPIENT_NAME');
        $this->email = env('MAIL_RECIPIENT_EMAIL');
    }

}
