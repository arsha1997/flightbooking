<!DOCTYPE html>
<html>
    <head>
        <title>AIRLIFT</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
    </head>
    <style>

.back
{
   background-color: rgba(0,0,0,0.1); 
}
.front
{
   background-color: rgba(0,0,0,0.3);
   margin: 1px; 
}
body
{
    background-image: 
}
        
input[type=email], input[type=password] {
  width: 100%;
  padding: 5px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color:rgba(0,0,0,0.1);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  width: 100%;
}


button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


.container {
  padding: 16px;
}
/*.pass
{
  margin-left: 700px;
}*/



.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}


.modal-content {
  
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}


.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
img.avatar {
  width: 100px;
  border-radius: 100px;
}
.log
{
  position: absolute;
  top:200px;
  left: 1000px;
  color: red;
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/*registration style*/

.cls{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  width: 100%;
  opacity: 0.9;
}


button:hover {
  opacity:1;
}
.sign:hover {
  opacity:1;
}

.sign {
  
  color: white;
  
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  width: auto;
  padding: 10px 18px;
  background-color: #f44336
  }

.cancelbtn, .sign {
  float: left;
  width: 100px;
}


.container {
  padding: 16px;
}


.modal1 {
  display: none; 
  position: fixed; 
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: #474e5d;
  padding-top: 50px;
}


.modal-content {
  background-color: #fefefe;
  margin: 5% auto 10% auto; 
  border: 1px solid #888;
  width: 80%; 
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 

.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
    </style>

<body>
        <!------header section---->
<header>
    <nav class="back">
        <div class="container-fluid top ">
            <div class="row">
                <div class="col-7">
                    <a href="#"class="text-decoration-none  text-dark">Home</a>
                    <a href="#" class="text-decoration-none  text-dark">Terms</a>
                </div>
            <div class="col-5 text-end">
                    <i class="fab fa-facebook text-dark"></i>
                    <i class="fab fa-instagram text-dark"></i>
                    <i class="fab fa-youtube text-dark"></i>
                    <i class="fab fa-google text-dark"></i>
                </div>
            </div>
        </div>
    </nav>
</header>
<!------menu section----->
    <nav class="navbar navbar-expand-lg top1 front">
        <div class="container">
            <a href="#" class="text-decoration-none text-dark"><h4>AIRLINE FLIGHT AND RESERVATION SYSTEM</h4></a>
                <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link  text-dark">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link  text-dark">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link  text-dark">Contact</a></li>
                <li class="nav-item"><a href="#" class="nav-link  text-dark">Feature</a></li>
                <li class="nav-item"><a href="#" class="nav-link  text-dark">Gallery</a></li>
                <li class="nav-item"><a href="#" class="nav-link  text-dark">Help</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="head">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
                <div class="carousel-item active">
                      <img src="../img/2.jpg" class="d-block w-100" alt="pic">
                </div>
              <div class="carousel-item">
                      <img src="../img/6.jpg" class="d-block w-100" alt="pic">
              </div>
              <div class="carousel-item">
                      <img src="../img/7.jpg" class="d-block w-100" alt="pic">
              </div>
          </div>
    </div>
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
</button>
  
<!-- login/register -->

<div class="log">
    <h2>Login/Register</h2>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">register</button>    
</div>

<!-- login pop up -->

<div id="id01" class="modal">
      <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="../img/1.png" alt="Avatar" class="avatar">
        </div>
    <div class="container">
          <label for="email"><b>email</b></label>
              <input type="email" placeholder="Enter email" name="email" required><br>
          <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
              <a href="<?php echo base_url()?>Main/index"><h3>Login</h3></a><br>
              <div class="pass">
                    <span class="password">Forgot <a href="#">password?</a></span></div><br>
              <div >
          <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
    </div>
          <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  
          </div>
      </div>
</form>


<!-- js -->


<script>
    var modal = document.getElementById('id01');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                }
              }

      </script>
</div>


<!-- registration popup -->

<div id="id02" class="modal1">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" action="/action_page.php">
<div class="container">
          <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
        <hr>
            <label for="email"><b>Name</b></label>
              <input type="text" name="fname" placeholder="First Name" required="This field must be required" class="cls"><br><br>
            <label for="email"><b>Last NAME</b></label>
              <input type="text" name="lname" placeholder="Last Name" required="" class="cls"><br><br>
            <label for="email"><b>Age</b></label>
              <input type="text" name="age" placeholder="Enyter your age" required="" class="cls"><br><br>
            <label for="email"><b>Gender</b></label>
                <input type="radio" name="gender" id="male" value=male required="" >
            <label for="male">Male</label>
                <input type="radio" name="gender" id="female"  value=female required="" >
            <label for="female">Female</label><br><br>
            <label for="email"><b>Address</b></label>
                <input type="textarea" name="address" placeholder="Enter Your Address" required="" class="cls"></br></br>
           <label for="email"><b>Phonenumber</b></label>
                <input type="text" name="phno" placeholder="Mobile number" required="" class="cls"><br>
          <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required class="cls"><br><br>
          <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*[!@#$%^&*])(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one special character and at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required class="cls"><br>

          <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" pattern="(?=.*[!@#$%^&*])(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one special character and at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required class="cls">
          <a href="<?php echo base_url()?>Main/index">SignIn Here</a><br><br>
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
                  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
              <div class="clearfix">
               <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
      </form>
</div>

<!-- js -->
<script>

            var modal = document.getElementById('id02');

                window.onclick = function(event) {
                      if (event.target == modal) {
                        modal.style.display = "none";
                          }
                            }
</script>




    <!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">

</script>
</body>     
</html>