<?php

namespace App\Notifications;

use App\Models\ContactFormRecipient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\HtmlString;

class ContactFormMessage extends Notification
{
    use Queueable;

    protected $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ContactFormRequest $request)
    {
        $this->message = $request;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(env('MAIL_RECIPIENT_NAME') . ', you have a new message from ' . env('APP_NAME') . '!')
            ->greeting(' ')
            ->salutation(' ')
            ->from($this->message->email, $this->message->name)
            ->line(new HtmlString('<b>Name: </b>' . $this->message->name))
            ->line(new HtmlString('<b>Email: </b>' . $this->message->email))
            ->line(new HtmlString('<b>Message: </b>>' . $this->message->message));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
