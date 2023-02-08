<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserlist()
    {
        $response = $this->get('/userlist');
        $response->assertStatus(200);
    }
    public function testExistUser()
    {
        $response = $this->get('/user/1');
        $response->assertStatus(200);
    }

    /**
     * @todo 該当レコードが存在しなかった場合のレスポンスを共通仕様として定義する
     */
    public function testNotExistUser()
    {
        $response = $this->get('/user/10');
        $response->assertStatus(200);
    }
    public function testNotNumber()
    {
        $response = $this->get('/user/a');
        $response->assertStatus(404);
    }
}
