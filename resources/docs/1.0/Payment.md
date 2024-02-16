# Payment

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
