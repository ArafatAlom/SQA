<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form </title>
    <link rel="stylesheet" href="/css/payment.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form action="payment" method="post">
        @csrf
            <!--Account Information Start-->
            <h3 style="color: black;">Account</h3>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="name" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>

            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" name="email" placeholder="Email Address" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="address" placeholder="Address" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="teacher_id" placeholder="Teacher Id" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <!--Account Information End-->



            <!--Payment Details Start-->
            <div class="input_group">
                <div class="input_box">
                    <h4>Payment Gateway</h4>
                    <input type="radio" name="gateway" value="bkash" class="radio" id="bc1" checked>
                    <label for="bc1"><span>
                            Bkash</span></label>
                    <input type="radio" name="gateway" value="nagad" class="radio" id="bc2">
                    <label for="bc2"><span>
                           Nagad</span></label>

                    <input type="radio" name="gateway" value="rocket" class="radio" id="bc3">
                    <label for="bc3"><span>
                           Rocket</span></label>

                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="tel" name="pay_no" class="name" placeholder="Bkash/Nagad no" required>
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="tel" name="trnx" class="name" placeholder="trnx Id" required>
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="number" name="amount" class="name" placeholder="Enter amount" required>
                    <i class="fa fa-user icon"></i>
                </div>
            </div>


            <!--Payment Details End-->

            <div class="input_group">
                <div class="input_box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>
