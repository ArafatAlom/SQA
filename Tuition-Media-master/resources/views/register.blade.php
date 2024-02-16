<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="/css/regstyle.css">
  <link rel="stylesheet" href="/css/payment.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    
    <div class="form">

      <!-- REGISTER FORM start here -->
      <!-- Every name is meaningful here.It may help you.-->

    <form action="register" method="post">
    @csrf 
        <div class="inputfield">
            <label>User Type</label>
            <div class="custom_select">
              <select name="user_type">
                <option value="">Select</option>
                <option value="male">Teacher</option>
                <option value="female">Student</option>
              </select>
            </div>
         </div> 
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" name="f_name" required class="input">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" name="l_name"  required class="input">
       </div>  
       <div class="inputfield">
          <label>Email Address</label>
          <input type="email" name="email" required class="input">
       </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="password" name="password" required class="input">
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" name="c_password" required class="input">
       </div> 
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender">
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 

      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" name="phone_no" required class="input">
       </div> 
       <div class="inputfield">
        <label>Institution</label>
        <input type="text" name="institution" required class="input">
     </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address"></textarea>
       </div> 

       <!--terms and conditions button -->
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 

       <!--submit button -->
       <div class="input_group">
                <div class="input_box">
                    <button type="submit">Register NOW</button>  
                </div>
            </div>
    </form>
     <!-- REGISTER FORM ends here -->
    </div>
</div>	
	
</body>
</html>