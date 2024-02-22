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
    <!-- REQUEST FORM starts here -->
    <div class="form">
    <form action="request" method="post">
        @csrf <!-- CSRF protection -->

        <div class="inputfield">
          <label>Gmail</label>
          <!-- Input field for Gmail -->
          <input type="email" name="gmail" required class="input">
       </div>  

       <div class="inputfield">
            <label>Private or Batch</label>
            <!-- Dropdown for selecting Private or Batch -->
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
          <!-- Input field for subject -->
          <textarea class="textarea" name="subject"></textarea>
       </div> 

       <div class="inputfield">
          <label>Number of Student</label>
          <!-- Input field for number of students -->
          <input type="text" name="no_of_student" required class="input">
       </div>  
       <div class="inputfield">
          <label>Address</label>
          <!-- Input field for address -->
          <textarea class="textarea" name="address"></textarea>
       </div> 

       <div class="inputfield">
          <label>Phone Number</label>
          <!-- Input field for phone number -->
          <input type="text" name="phone_no" required class="input">
       </div> 

       <div class="inputfield">
          <label>Teacher Id</label>
          <!-- Input field for teacher ID -->
          <input type="text" name="teacher_id" required class="input">
       </div> 

       <div class="inputfield">
          <label>Opinion</label>
          <!-- Input field for opinion -->
          <textarea class="textarea" name="opinion"></textarea>
       </div> 

        <!-- Submit button -->
        <div class="input_group">
                <div class="input_box">
                    <button type="submit">Request NOW</button>  
                </div>
            </div>
    </form>
    </div>
</div> 

</body>
</html>
