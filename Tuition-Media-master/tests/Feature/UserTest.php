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

//for payment
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


}
