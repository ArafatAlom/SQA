# Profile
---
- [Description](#section-1)
- [Active Controllers](#section-2)
- [Methods](#section-3)
- [Models](#section-4)
- [Views-Route](#section-5)


<a name="section-1"></a>

## Description

Here we implemented the make_request feature .


<a name="section-2"></a>

## Active Controllers

1. Make_requestController.php

<a name="section-3"></a>

## Methods

1. `make_requestData() : Returns view of 'profile';`

```php
    <div class="inputfield">
        <label>Number of Student</label>
        <input type="text" name = "no_of_student" required class="input">
    </div> 
```



<a name="section-4"></a>

## Models
1. Make_request.php

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
| 1 | GET  | /Make_request  |Make_request |Make_request  |

