# Payment
---
- [Description](#section-1)
- [Active Controllers](#section-2)
- [Methods](#section-3)
- [Models](#section-4)
- [Views-Route](#section-5)


<a name="section-1"></a>

## Description

Here we implements the payment feature where teachers can contact with the authority.
Teacher can fill up a form and submit this with there payment details.


<a name="section-2"></a>

## Active Controllers

1. PaymentController.php

<a name="section-3"></a>

## Methods

1. `payData() : Returns view of 'index';`

```php
class PaymentController extends Controller
{
    //function for inserting payment information
    function payData(Request $req)
    {
        //variable for payment table in databse
        $payment= new Payment;
        $payment->name=$req->name;
        $payment->email=$req->email;
        $payment->address=$req->address;
        $payment->teacher_id=$req->teacher_id;
        $payment->gateway=$req->gateway;
        $payment->pay_no=$req->pay_no;
        $payment->trnx=$req->trnx;
        $payment->amount=$req->amount;
        $payment->save();

        
        echo '<script>alert("Payment Succesfull!!!!!!!")</script>'; //inline javascript with php
        
        return view('index');


    }
}

```



<a name="section-4"></a>

## Models
1. Payment.php

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
| 1 | GET  | /payment  |Payment | payment  |
| 2 | POST  | /payment | Pay Now |payData |




