<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    //for register
    public function test_register()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    //for payment
    public function test_payment()
    {
        $response = $this->get('/payment');
        $response->assertStatus(200);
    }

    //for profile
    public function test_profile()
    {
        $response = $this->get('/profile');
        $response->assertStatus(200);
    }

    
    //for privacy

    public function test_privacy()
    {
        $response = $this->get('/privacy');
        $response->assertStatus(200);
    }
    
//for privacy
    
    public function test_course()
    {
        $response = $this->get('/course');
        $response->assertStatus(200);
    }

   
    

    


    
}
