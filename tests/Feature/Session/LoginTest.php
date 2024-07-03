<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

it('can log in a user', function () {
    $user = User::factory()->create();

    $response = $this->post(route('login'), [
        'email' => $user->email,
        'password' => 'password',
    ]);


    $response->assertStatus(302); // Check if the response is a redirect (HTTP status code 302)

    expect(Auth::check())->toBeTrue(); // Check if the user is authenticated
    expect(Auth::id())->toBe($user->id); // Check if the authenticated user matches $user
});
