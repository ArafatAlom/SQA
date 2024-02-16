# Register Account
---
- [Description](#section-1)
- [Active Controllers](#section-2)
- [Methods](#section-3)
- [Models](#section-4)
- [Views-Route](#section-5)




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
<a name="section-5"></a>

## Views-Route

| # | Request type   | Path |  Action | Route Name |
| : |   :-   |  :  | : | : |
| 1 | GET  | /register  | Register | register |
| 2 | POST  | /register | Register Now | register |
