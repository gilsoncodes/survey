<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;

class CustomEmailVerifyNotification extends Notification
{
    use Queueable;
    /**
     * The callback that should be used to create the verify email URL.
     *
     * @var \Closure|null
     */
    public static $createUrlCallback;

    /**
     * The callback that should be used to build the mail message.
     *
     * @var \Closure|null
     */
    public static $toMailCallback;

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $verificationUrl);
        }

        return $this->buildMailMessage($verificationUrl);
    }

    /**
     * Get the verify email notification mail message for the given URL.
     *
     * @param  string  $url
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    protected function buildMailMessage($url)
    {

      //emails/email-verify-markdown.blade.php
      // $emailContent = "<span style='border-bottom: 2px solid #ff8b00; padding-bottom: 3px; margin-bottom: 17px; '>" .
      // trans('The GAR Solutions Team') . "</span><p style='display:flex; align-items: center; margin: 3px 0 0; padding:0;font-size: small;'><img src='" .
      // asset( 'images/globe.png' ) . "' width='15' height='15' alt='globe icon'> &nbsp; <a href='https://www.garsolutions.com' style='color: #006fc2; text-decoration: none;'>
      // www.garsolutions.com </a> </p> <p style='display:flex; align-items: center; margin: 0; padding:0; font-size: small;'>	<img src='" .
      // asset( 'images/at.png' ) . "' width='15' height='15' alt='at icon'> &nbsp; <a href='mailto:contact@garsolutions.com' style='color: #006fc2; text-decoration: none;'>
      // contact@garsolutions.com </a> </p> <p style='display:flex; align-items: center; margin: 0; padding:0;  font-size: small;'> 	<img src='" .
      // asset( 'images/phone.png' ) . "' width='15' height='15' alt='phone icon'> &nbsp; <a href='tel:+16175641345' style='color:  #006fc2; text-decoration: none; font-size: small;'>
      // (617) 564 - 1345 </a> </p>";
        return (new MailMessage)
                    ->from('contact@garsolutions.com')
                    ->subject( __('Verify Email Address - GAR Solutions'))
                    ->markdown('emails.email-verify-markdown',[
                      'url' => $url,
                    ]);
      //      ->subject(Lang::get('Verify Email Address customized'))
      //       ->line(Lang::get('Please click the button below to verify your email address.'))
      //       ->action(Lang::get('Verify Email Address'), $url)
      //       ->line(Lang::get('If you did not create an account, no further action is required.'))
      //       ->salutation(Lang::get('Regards,'))
      //       ->html($emailContent);
    }

    /**
     * Get the verification URL for the given notifiable.
     *
     * @param  mixed  $notifiable
     * @return string
     */
    protected function verificationUrl($notifiable)
    {
        if (static::$createUrlCallback) {
            return call_user_func(static::$createUrlCallback, $notifiable);
        }

        return URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );
    }

    /**
     * Set a callback that should be used when creating the email verification URL.
     *
     * @param  \Closure  $callback
     * @return void
     */
    public static function createUrlUsing($callback)
    {
        static::$createUrlCallback = $callback;
    }

    /**
     * Set a callback that should be used when building the notification mail message.
     *
     * @param  \Closure  $callback
     * @return void
     */
    public static function toMailUsing($callback)
    {
        static::$toMailCallback = $callback;
    }
}
