<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Request Form</title>
	<link rel="stylesheet" href="/css/regstyle.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Request Form
    </div>
    <!-- REQUEST FORM start here -->
      <!-- Every name is meaningful here.It may help you.-->
    <div class="form">
    <form action="request" method="post">
        @csrf 

        <div class="inputfield">
          <label>Gmail</label>
          <input type="email" name = "gmail" required class="input">
       </div>  

       <div class="inputfield">
            <label>Private or Batch</label>
            <div class="custom_select">
              <select name="private_or_batch">
                <option value="">Select</option>
                <option value="private">Private</option>
                <option value="batch">Batch</option>
              </select>
            </div>
         </div> 

         <div class="inputfield">
          <label>Subject</label>
          <textarea class="textarea" name="subject" ></textarea>
       </div> 

       <div class="inputfield">
          <label>Number of Student</label>
          <input type="text" name = "no_of_student" required class="input">
       </div>  
       <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address" ></textarea>
       </div> 

       <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" name="phone_no" required class="input">
       </div> 

       <div class="inputfield">
          <label>Teacher Id</label>
          <input type="text" name="teacher_id" required class="input">
       </div> 

       <div class="inputfield">
          <label>Opinion</label>
          <textarea class="textarea" name ="opinion" ></textarea>
       </div> 

        <!--submit button -->
        <div class="input_group">
                <div class="input_box">
                    <button type="submit">Request NOW</button>  
                </div>
            </div>
    </div>
</div>	

</body>
</html>