<?php

namespace Tests\Unit;

use App\Models\UserDetails;
use App\Models\UserModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserDetailsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function details_cannot_be_created_without_a_user()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        $details = UserDetails::factory()->make([
            'user_model_id' => null,
        ])->save();
    }

    /** @test */
    public function deleting_a_user_also_deletes_related_details()
    {
        $user = UserModel::factory()->hasDetails(1)->create();

        $detailsId = $user->details->id;

        $user->delete();

        $this->assertDatabaseMissing('user_details', ['id' => $detailsId]);
    }

    /** @test */
    public function details_can_be_created_for_a_user_with_all_fields()
    {
        $user = UserModel::factory()->create();

        $detailsData = [
            'user_model_id' => $user->id,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'citizenship' => 'USA',
            'address' => '123 Main St, Springfield',
            'birth_date' => '1990-01-01',
            'mob_phone' => '123-456-7890',
            'job_title' => 'Developer',
            'postcode' => '12345',
        ];

        $details = UserDetails::factory()->make($detailsData);
        $details->save();

        $this->assertDatabaseHas('user_details', $detailsData);
    }

    /** @test */
    public function details_belong_to_a_user()
    {
        $details = UserDetails::factory()->forUser()->create();

        $this->assertNotNull($details->user);
    }
}
