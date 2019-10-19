<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class All extends Notification
{
    use Queueable;
    protected $contact;
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

   
    public function via($notifiable)
    {
        return ['database'];
    }

   
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

   
    public function toArray($notifiable)
    {
        return [
            'data'  => trans('admin.new_contact'),
            'id'    => $this->contact->id,

        ];
    }
}
