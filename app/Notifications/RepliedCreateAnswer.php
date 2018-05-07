<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;

class RepliedCreateAnswer extends Notification
{
    use Queueable;


    protected $answer;


    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($answer)
    {
        $this->answer=$answer;
    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */


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

/**
 * Get the array representation of the notification.
 *
 * @param  mixed $notifiable
 * @return array
 */
public function toDatabase($notifiable)
{
    return [
        'repliedTime'=>Carbon::now()
    ];
}
}
