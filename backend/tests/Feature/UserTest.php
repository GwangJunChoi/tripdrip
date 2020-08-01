<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use App\User;

class AuthTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    private string $password = 'test';

    //vendor/bin/phpunit --filter a_user_can_be_registered or vendor/bin/phpunit
    /** 
     * @test
    */
    public function a_user_can_be_registered()
    {
        $this->withoutExceptionHandling();
        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => $this->password,
            'password_confirmation' => $this->password
        ];

        $response = $this->post('/api/user', $data);

        $response->assertStatus(201)
            ->assertJsonStructure(['user']);

        $this->assertDatabaseHas('users', [
            'email' => $data['email'],
        ]);
    }

    /** 
     * @test
    */
    public function a_user_can_log_in() {

        $user = factory(User::class)->create([
            'password' => Hash::make($this->password)
        ]);

        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => $this->password
        ]);

        $response->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'token',
                'user'
            ]);

        $this->assertSame(1, DB::table('personal_access_tokens')->count());
    }

    /** @test */
    public function a_user_can_log_out() {
        $this->withoutExceptionHandling();  
          $user = factory(User::class)->create([
            'password' => Hash::make($this->password)
        ]);

        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => $this->password
        ]);

        $response = $this->get('/api/logout', [], ['Authorization' => 'bearer ' . $response->json('token')]);

        $response->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure(['message', 'user']);
        $this->assertEquals(0, DB::table('personal_access_tokens')->count());
    }

}