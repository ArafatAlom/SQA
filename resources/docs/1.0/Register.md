# Register Account
---


<a name="section-1"></a>

## Description

Here we implements the registration feature where teachers/students can register themselves.
Teacher/Students can fill up a form and submit this with there  details.After that they become a registered member 

## Active Controllers

1. RegisterController.php


<a name="section-3"></a>

## Methods

1. `create() : Returns User:'create';`

```php
 protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'user_type' => $data['user_type'],
            'user_id' => $data['user_id'],
            'gender' => $data['gender'],
            'institution' => $data['institution'],
            'contact_no' => $data['contact_no'],
            'address' => $data['address'],

            'email' => $data['email'],

            'password' => Hash::make($data['password']),
        ]);
    }
```

2. `validator() : Returns 'Validator';`

```php
   protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'user_type' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:10'],
            'institution' => ['required', 'string', 'max:255'],
            'contact_no' => ['required', 'string', 'max:25'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
```



<a name="section-4"></a>

## Models
1. Registration.php

```php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    public $timestamps=false;
}



```
