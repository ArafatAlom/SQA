# Contact
---



## Active Controllers

1. ContactController.php


<a name="section-3"></a>

## Methods

1. `contact() : Returns User:'contact us';`


```php
 <section class="contact" id="contact">

            <h1 class="heading">contact us</h1>

            <div class="row">

                <form action="https://formsubmit.co/492b5601ca4396514416060d18735dac" method="POST">
                    <input type="text" placeholder="full name" class="box" name="name">
                    <input type="email" placeholder="your email" class="box" name="email">

                    <input type="number" placeholder="your number" name="number" class="box">
                    <textarea name="message" id="" cols="30" rows="10" class="box address" placeholder="your message"></textarea>
                    <input type="submit" class="btn" value="send now">
                </form>

                <div class="image">
                    <img src="images/contact-img.png" alt="">
                </div>

            </div>

        </section>

```



<a name="section-4"></a>

## Models
1. Contact.php

```php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps=false;
}

```
