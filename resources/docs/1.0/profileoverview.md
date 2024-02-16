# Profile
---
- [Description](#section-1)
- [Active Controllers](#section-2)
- [Methods](#section-3)
- [Models](#section-4)
- [Views-Route](#section-5)


<a name="section-1"></a>

## Description

Here we implements the profile feature where teachers can contact with the authority.
Teacher can fill up a form and submit this with there payment details.


<a name="section-2"></a>

## Active Controllers

1. ProfileController.php

<a name="section-3"></a>

## Methods

1. `profileData() : Returns view of 'profile';`

```php
    <div class="profile-menu">
        <ul class="nav nav-tabs nav-tabs-solid">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="{{ route('password.request') }}">Password</a> </li>
        </ul>
    </div>
```



<a name="section-4"></a>

## Models
1. Profile.php

```php 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Payment extends Model
{
    use HasFactory;
    public $timestamps=false;
}
```

<a name="section-5"></a> 

## Views-Route

| # | Request type   | Path |  Action | Route Name |
| : |   :-   |  :  | : | : |
| 1 | GET  | /profile  |Profile | profile  |

