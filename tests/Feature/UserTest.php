<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
	use DatabaseMigrations;

    //test if user correctly saving in database
    public function testUserModel()
    {
        $user = new User();
        $user->email = "sankaja@ex.com";
   		  $user->first_name = "Sankaja";
   		  $user->last_name = "Rajapakse";
   		  $user->password = "123123";
   		  $user->save();
   		//testing for email
        $this->assertEquals($user->email,"sankaja@ex.com");
        //testing for first name
        $this->assertEquals($user->first_name,"Sankaja");
        //testing for second name
        $this->assertEquals($user->last_name,"Rajapakse");
        //see in database
         $this->assertDatabaseHas('users',['email' => 'sankaja@ex.com','first_name'=>'Sankaja','last_name' => 'Rajapakse','password' => '123123']);
    }
}
