<?php
// php artisan test --filter UserTest

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{

    // contains verified
    /** @test */
    public function test_returns_verified_users() : void
    {
        // create User
        $verifiedUser = User::factory()->create(['email_verified_at' => now()]);

        // get all unverified users
        $allVerifiedUsers = User::emailVerifiedAt()->get();

        // assert
        $this->assertTrue($allVerifiedUsers->contains($verifiedUser));
    }

    // dont contains unverified
    /** @test */
    public function test_doesnt_return_unverified_users() : void
    {
        // create User
        $unverifiedUser = User::factory()->create(['email_verified_at' => null]);

        // get all verified
        $allVerifiedUsers = User::emailVerifiedAt()->get();

        // assert
        $this->assertFalse($allVerifiedUsers->contains($unverifiedUser));
    }
}
