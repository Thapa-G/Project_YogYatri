<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    height: 100vh;
  }
  form {
    /* background-color: #fce3bd; */
    /* backface-visibility: visible;
    backdrop-filter: blur(8px); */
    padding: 20px 20px 20px 20px;
    border-radius: 8px;
    /* box-shadow: 0px 0px 20px rgb(255, 136, 0); */
    margin: 25px 25px 4px 5px;
    color: aliceblue;
    width: 400px;
  }
  input[type="text"],
  input[type="email"],
  input[type="password"],
  input[type="date"],
  select {
    width: calc(100% - 12px);
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type="submit"] {
    
    background-color: #e9a00e;
    color: white;
    padding: 14px 20px;
    margin: 20px 0 0 0 ;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
  }
  input[type="submit"]:hover {
    background-color: #c06114;
  }
  .formbox{
    height: 100%;
    width: 100%;
    
    display: grid;
    grid-template-columns: repeat(2,1fr);
    backdrop-filter: blur(8px);
    
    padding:25px 150px 25px 150px;
    box-sizing: border-box;

    
    /* justify-content: center;
    align-items: center; */
    
  }
  .grayscale{
    height: 100%;
    width: 100%;
    background: rgba(2, 2, 2, 0.54);
    display: flex;
    flex-direction: row;
    justify-content:right;
    align-items:center;
    /* padding: 0px 50px 0px 0px; */
    box-sizing: border-box;
  }
  .image{
    background-image: url(../image/img13.JPG);
    background-repeat: no-repeat;
    background-size:cover ;
    background-position:center ; 
    /* margin:50px 50px 50px 0px; */
    margin: 25px 25px 4px 25px;
  }
  .edform{
    box-sizing: border-box;
    justify-content: right;
    display: flex;
    
    
  }
  .main{
    background-image:url(../image/Asset\ 1@2x-8.png);
    background-size: cover;
    background-position: center;
  }
  #contact{
    width: 190px;
    height: 25px;
    margin: 10px 0 0 0;
  }
  .account{
   font-size: small;
  }
  .account a{
    color: burlywood;
  }
  
</style>
</head>
<body>
  <div class="main">
<div class="formbox">
  <div class="image">
  </div>
  <div class="edform">
  <form  method="post" id="myForm">
    <label for="name">First Name:</label>
    <input type="text" id="name" name="name" required>
   
    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <!-- <label for="confirm">Confirm Password:</label>
    <input type="password" id="confirm" name="confirm" required> -->
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>
    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>
    <label for="contact">Contact Number:</label>
    <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" placeholder="Enter 10-digit phone number" required>
    <input type="submit" value="Submit" onclick="server_Response(); event.preventDefault()">
    <p class="account">Already have an Account? <a href="Log In">Log In</a> </p>
  </form>

</div>
  
    </div>
</div>
</div>
<script>
    

  function server_Response(){
            var xhr = new XMLHttpRequest();
            var formdata = new FormData(document.getElementById("myForm"));
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                       alert(xhr.responseText);
                        document.getElementById("myForm").reset(); // Reset form fields
                    } else {
                        alert("Connection Error maam.")
                    }
                }
            };
            xhr.open("POST", "signupmethod.php", true); // Update the URL to the correct path
            xhr.send(formdata);
          }
        
</script>
</body>
</html>
