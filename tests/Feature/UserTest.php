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
        'email'=>'emonju330@gmail.com'

    ]);
 }

 //database testing2
 public function test_db2()
 {
    $this->assertDatabaseHas('payments',[
        'name'=>'Robin'

    ]);
 }

  //database testing2
  public function test_db3()
  {
     $this->assertDatabaseHas('users',[
         'user_id'=>'emon330'
 
     ]);
  }

//for payment
 public function test_payData()
 {
     $response = $this->post('/payment', [

         'name' => 'Al Imran',
         'email' => 'imran@gmail.com',
         'address' => 'savar,dhaka',
         'teacher_id' => 'imrann3',
         'gateway' => 'nagad',
         'pay_no' => '01887656432',
         'trnx' => 'xhjfyw2',
         'amount' => '1500'



     ]);
     $response->assertRedirect('index');
 }


}
