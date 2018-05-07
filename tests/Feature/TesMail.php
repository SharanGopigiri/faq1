<?php

namespace Tests\Feature;

use App\Notifications\mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestMail extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testmail()
    {
        Mail::fake();

        // Perform order shipping...

        Mail::assertSent(mail::class {
            return $mail->user->id === $user->id;
        });

        // Assert a message was sent to the given users...
        Mail::assertSent(mail::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email) &&
                $mail->hasCc('...') &&
                $mail->hasBcc('...');
        });

        // Assert a mailable was sent twice...
        Mail::assertSent(mail::class, 2);

        // Assert a mailable was not sent...
        Mail::assertNotSent(mail::class);
    }
}
