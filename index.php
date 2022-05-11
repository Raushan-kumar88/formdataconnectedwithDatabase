<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistrationForm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title">REGISTRATION FORM</div>
        <div class="main">
            <form method="post" action="process.php">
            <div class="demo">
                <label >First Name </label> <input type="text" placeholder="Enter your Fname" class="input" name="fname" required>
            </div>
            <div class="demo">
                <label >Last Name </label> <input type="text" placeholder="Enter your Lname" class="input" name="lname" required>
            </div>
           
            <div class="demo">
                <label >Phone number </label> <input type="phone" placeholder="Phone number" class="input" name="phone" required>
            </div>
            <div class="demo">
                <label >Password </label> <input type="password" placeholder="Enter your password" class="input" name="password" required>
            </div>
            <div class="demo">
                <label >Confirm Password </label> <input type="password" placeholder="Enter Confirm password" class="input" name="cpassword" required>
            </div>
            <div class="demo">
                <label >Gender </label>
                <div class="custom_select">
                <select name="gender">
                    <option value="note selected">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                
            
                </select>
            </div>
            </div>
            <div class="demo">
                <label >Email address </label> <input type="text" placeholder="Enter your email" class="input" name="email" required>
            </div>
            <div class="demo">
                <label >Address</label> <textarea  class="textarea" name="address"></textarea>
            </div>
            <div class="demo terms" >
               <label class="check"><input type="checkbox"> <span class="check2"></span></label>
               <p>I agree to term and conditions</p>
            </div>
            <div class="demo">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
            </form>
        </div>
    </div>
   
</body>
</html>