<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
 //database testing1
 public function test_db()
 {
    $this->assertDatabaseHas('users',[
        'email'=>'jucse28.358@gmail.com'

    ]);
 }

 //database testing2
 public function test_db2()
 {
    $this->assertDatabaseHas('payments',[
        'name'=>'Sayeda'

    ]);
 }

  //database testing2
  public function test_db3()
  {
     $this->assertDatabaseHas('users',[
         'user_id'=>'sayeda358'
 
     ]);
  }

//for Payment
 public function test_payData()
 {
     $response = $this->post('/payment', [

         'name' => 'Sayeda Parvin',
         'email' => 'jucse28.358@gmail.com',
         'address' => 'savar,dhaka',
         'teacher_id' => 'Hassan123',
         'gateway' => 'nagad',
         'pay_no' => '01318522709',
         'trnx' => 'xhjfyw2',
         'amount' => '1500'



     ]);
     $response->assertRedirect('index');
 }

    //for Profile
    public function test_showProfile()
    {
        $response = $this->get('/profile');
        $response->assertStatus(200);
        $response->assertRedirect('index');
        
    }

    public function test_updateProfile()
    {

        $response = $this->post('/profile', [
            'name' => 'Sayeda Monika',
            'user_id' => 'monika123',
            'email' => 'sayeda.stu2018@juniv.edu',
            'gender' => 'Female',
            'contact_no' => '01318522709',
            'address' => 'JU campus, Savar',
        ]);

        $response->assertRedirect('index');

    }

    public function test_changePassword()
    {

        $response = $this->post('/profile', [
            'old_password' => 'abc12345',
            'new_password' => 'abc789@#',
            'confirm_password' => 'abc789@#',
        ]);

        $response->assertRedirect('index');
        $this->assertTrue(\Hash::check('new_password', $user->fresh()->password));
    }

}
