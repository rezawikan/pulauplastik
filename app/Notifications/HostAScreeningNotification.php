<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class HostAScreeningNotification extends Notification
{
    use Queueable;

    protected $request;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
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
        ->greeting('Hi')
        ->subject('Request Host A Screening From '. $this->request->firstName .  $this->request->lastName)
        ->line('You get an email from '. $this->request->firstName .' '.  $this->request->lastName)
        ->line('Community : '.$this->request->community)
        ->line('Contact Person : '.$this->request->phone)
        ->line('Date of Event : '.$this->request->dateOfEvent)
        ->line('location : '.$this->request->location)
        ->line('Audience Profile : '.$this->request->audienceProfile)
        ->line('Numbers of Audience : '.$this->request->numbersOfAudience)
        ->line('Email : '.$this->request->email)
        ->line('Short Description : '.$this->request->shortDescription)
        ->markdown('mail.contact-us');
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
