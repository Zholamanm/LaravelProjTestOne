<?php

namespace Tests\Unit;

use App\Mail\ConfirmationCodeMailable;
use App\Models\UserDetails;
use App\Models\UserModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
;

class UserModelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_be_created()
    {
        Mail::fake();

        $user = UserModel::factory()->create([
            'username' => 'testuser',
            'email' => 'testuser@example.com',
            'password' => bcrypt('password'),
            'phone' => '123456789',
            'avatar' => 'path/to/avatar.jpg',
            'confiramtion_code' => '123456'
        ]);


        // Проверка, что письмо было отправлено
        Mail::assertSent(ConfirmationCodeMailable::class);

        // Проверка, что письмо отправлено на правильный адрес
        Mail::assertSent(ConfirmationCodeMailable::class, function ($mail) {
            return $mail->hasTo('testuser@example.com');
        });
        $this->assertDatabaseHas('user_models', [
            'username' => 'testuser',
            'email' => 'testuser@example.com',
            'phone' => '123456789',
        ]);
    }

    /** @test */
    public function user_has_details()
    {
        $user = UserModel::factory()->hasDetails(1)->create();

        $this->assertNotNull($user->details);
    }

    /** @test */
    public function details_belong_to_a_user()
    {
        $details = UserDetails::factory()->forUser()->create();

        $this->assertNotNull($details->user);
    }
    /** @test */
    public function confirmation_email_is_sent()
    {

    }
}
