<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set, compatibility, and viewport settings -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the HTML page -->
    <title>Payment Form</title>
    <!-- Link to external stylesheets for styling -->
    <link rel="stylesheet" href="/css/payment.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Container for the payment form -->
    <div class="wrapper">
        <!-- Heading for the payment form -->
        <h2>Payment Form</h2>
        <!-- Form for capturing payment information -->
        <form action="payment" method="post">
        <!-- CSRF token to protect against cross-site request forgery -->
        @csrf
            <!-- Account Information Section Start -->
            <h3 style="color: black;">Account</h3>
            <!-- Input field for Full Name -->
            <div class="input_group">
                <div class="input_box">
                    <!-- Full Name Input -->
                    <input type="text" name="name" placeholder="Full Name" required class="name">
                    <!-- Icon for Full Name -->
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <!-- Input field for Email Address -->
            <div class="input_group">
                <div class="input_box">
                    <!-- Email Address Input -->
                    <input type="email" name="email" placeholder="Email Address" required class="name">
                    <!-- Icon for Email Address -->
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <!-- Input field for Address -->
            <div class="input_group">
                <div class="input_box">
                    <!-- Address Input -->
                    <input type="text" name="address" placeholder="Address" required class="name">
                    <!-- Icon for Address -->
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <!-- Input field for Teacher ID -->
            <div class="input_group">
                <div class="input_box">
                    <!-- Teacher ID Input -->
                    <input type="text" name="teacher_id" placeholder="Teacher Id" required class="name">
                    <!-- Icon for Teacher ID -->
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <!-- Account Information Section End -->

            <!-- Payment Details Section Start -->
            <div class="input_group">
                <div class="input_box">
                    <h4>Payment Gateway</h4>
                    <!-- Radio buttons for selecting payment gateway (Bkash, Nagad, Rocket) -->
                    <input type="radio" name="gateway" value="bkash" class="radio" id="bc1" checked>
                    <label for="bc1"><span>Bkash</span></label>
                    <input type="radio" name="gateway" value="nagad" class="radio" id="bc2">
                    <label for="bc2"><span>Nagad</span></label>
                    <input type="radio" name="gateway" value="rocket" class="radio" id="bc3">
                    <label for="bc3"><span>Rocket</span></label>
                </div>
            </div>
            <!-- Input field for Bkash/Nagad number -->
            <div class="input_group">
                <div class="input_box">
                    <!-- Bkash/Nagad Number Input -->
                    <input type="tel" name="pay_no" class="name" placeholder="Bkash/Nagad no" required>
                    <!-- Icon for Bkash/Nagad Number -->
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <!-- Input field for transaction ID -->
            <div class="input_group">
                <div class="input_box">
                    <!-- Transaction ID Input -->
                    <input type="tel" name="trnx" class="name" placeholder="trnx Id" required>
                    <!-- Icon for Transaction ID -->
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <!-- Input field for payment amount -->
            <div class="input_group">
                <div class="input_box">
                    <!-- Payment Amount Input -->
                    <input type="number" name="amount" class="name" placeholder="Enter amount" required>
                    <!-- Icon for Payment Amount -->
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <!-- Payment Details Section End -->

            <!-- Button to submit the payment form -->
            <div class="input_group">
                <div class="input_box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>
