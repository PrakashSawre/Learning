<html>
<head>
	<title>Registration Form</title>	
</head>
<body>
<div style="width:300px;margin:0px auto">
    <h2>User Registration Form</h2>

    <form id="userform" name="userform" action="registration_form.php" method="POST" enctype="multipart/form-data">
    
        <h4>Full name:</h4>
        <input type="text" id="fullname" name="fullname">
               
         
        <h4>Please select your country:</h4>
        <select id="country" name="country" >
          <option value="" disabled selected>Choose option</option>
          <option value="America">America</option>
          <option value="England">England</option>
          <option value="India">India</option>
          <option value="Japan">Japan</option>          
          <option value="Pakistan">Pakistan</option>          
        </select>
             
        
        <h4>you have following Family Member:</h4>
        <input type="checkbox" id="Member1" name="member[]" value="Mother">
         I have a Mother<br>
        <input type="checkbox" id="Member2" name="member[]" value="Father">
         I have a Father<br>
        <input type="checkbox" id="Member3" name="member[]" value="Brother">
         I have a Brother<br>
        <input type="checkbox" id="Member4" name="member[]" value="Sister">
         I have a Sister

         
         <h4>Your Gender is:</h4>
         <input type="radio" id="Male" name="gender" value="Male">
            Male<br>
            <input type="radio" id="Female" name="gender" value="Female">
            Female

         <h4>Upload File:</h4>
         <input type="file" id="myFile" name="myFile">   

        <br><br>
        <input type="submit" id="submit" name="submit" value="submit">
   
    </form>

   </div> 
</body> 
</html>
