<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>laravel</title>
<!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>-->
</head>
<body data-spy="scroll" data-target="#menu">
  <!---start of home-->
  <!--start of navigation-->
  <div id="home">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h4>CARE YOUR HEALTH</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#product">PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#testmonial">TESTMONIAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">CONTACT</a>
        </li>
      </ul>
    </div>
    </div>  
    </nav>
    <!--start landing page-->
    <div class="landing">
    </div>
    <div class="home-wrap">
      <div class="caption center-block">
    </div>
      <div class="home-inner">
      </div>
    </div>  
    </div>
    <!--end landing page-->

    <!--start landing page caption-->
    <div class="caption center-block text-center">
      <h3 style="">HEALTH CONSULTATION SERVICES</h3>
      <a class="btn btn-outline-light" href="#about">Get Started</a>
      <div class="buttons" style="padding-top: 3rem;border-radius: 10px;">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalsignin">Sign In</button>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalsignup">Sign Up</button>

      <!--start of modal to sign In-->

<div class="modal fade" tabindex="-1" role="dialog" id="modalsignin" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Sign In</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    
  </form>
        
      </div>
    </div>
  </div>
</div>

      
      <!--end modal to sign In-->

       <!--start of modal to sign Up-->
      <div class="modal fade" tabindex="-1" role="dialog" id="modalsignup" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{URL::to('/home')}}" method="post">
    <div class="form-group">
      <label for="firstname">FirstName</label>
      <input type="firstname" class="form-control" id="fname" placeholder="Enter Firstname" name="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">LastName</label>
      <input type="lastname" class="form-control" id="lname" placeholder="Enter LastName" name="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
      <label for="email">Password</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="Phonenumber">PhoneNumber</label>
      <input type="tel" class="form-control" id="phone" placeholder="+255767832151" name="phone">
    </div>
      <div class="form-group">
      <label for="lastname">Date of birth</label>
      <input type="date" class="form-control" id="bday" placeholder="Enter birth day" name="bithday">
    </div> 
   <div class="form-group">
    <label for="address">Address</label>
    <input type="address" class="form-control" id="address" placeholder="location"name="address">
  </div>
    <div class="form-group">
      <label for="gender">Gender</label><br>
<input type="radio" name="gender" value="male" id="gender"> Male<br>
  <input type="radio" name="gender" value="female" id="gender"> Female<br>
  <input type="radio" name="gender" value="other" id="gender"> Other
    </div>

    <div class="form-group">
    <label for="profile">Profile photo</label>
    <input type="file" class="form-control-file" id="profile" name="profile">
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="checkbox" name="checkbox" value="check" id="agree" /> I have agreed to terms and conditions


    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="button">Sign Up</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    
  </form>
        
      </div>
    </div>
  </div>
</div>
       <!--end of modal to sin Up-->

    </div>
    <!--end landing page caption-->
</div>
  <!--end of navigation-->
  <!---end of home-->

  <!--start of about section-->
  <div id="about">
    <div class="jumbotron">
      <h3 class="heading">About</h3>
      <div class="row">

        <div class="col-md-4 text-center">
          <h4>Medicines</h4>
          <p>All medicines of all kind are available and we provide medicine according to custmer's problems and after full investigation of the problem.</p>
        </div>

        <div class="col-md-4 text-center">
          <h4>Equipments</h4>
          <p>We also provide equipments for cheap costs all modern and efficient equipments are available and we also allow customer to order equipments needed.</p>
        </div>

         <div class="col-md-4 text-center">
           <h4>Advice</h4>
           <p>We also provide free advice what a patient should do so as to overcome problems and also non patient to ensure good health for free.all patients and non patient are allowed to ask question.</p>
         </div>

      </div>
    </div>
  </div>
  <!--end of about section-->

  <!--start of products section-->
  <div id="product">

    <div class="container-fluid padding">
      <h3 class="heading" style="">Products</h3>
      <div class="row no-padding">
        <div class="col-md-6">
          <img class="products" src="images/1.png">
        </div>
        <div class="col-md-6">
          <img class="products" src="images/2.png">
        </div>
        <div class="col-md-6">
          <img class="products" src="images/3.png">
        </div>
        <div class="col-md-6">
          <img class="products" src="images/4.png">
        </div>
      </div>
    </div>

  </div>
  <!--end of products section-->

  <!--start of testimonial section-->
  <div id="testmonial">
    <h3 class="heading" style="padding-top: 2rem;">TESTMONIALS</h3>
    <div class="row padding">
      <div class="col-md-6">
        <div class="card text-center">
          <img class="card-img-top" src="images/juma.png">
          <div class="card-body">
            <h4>JUMA HAMAD</h4>
            <p>"I have one year experiance in technology, I have based in the department of software development"</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card text-center">
          <img class="card-img-top" src="images/friend.png">
          <div class="card-body">
            <h4>HAMAD MUSTAFA</h4>
            <p>"I have one year experiance in technology, I have based in the department of software development"</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--end of testimonial section-->

   <!--start of contact section-->
   <div id="contact">
     <div class="container-fluid footer">
      <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">
          <h4>HEALTH</h4>
          <p>Our core features is to provide health care services including supplying medical equipments and also medicines and also a piece of advice to patients</p>
          <strong>Our Location</strong>
          <p>200 street Name<br>Our Load,Sam Mujoma Load</p>
          <strong>Contact Info</strong>
          <p>(+255)767832151<br>jum9hamad@gmail.com</p>

      </div>
     </div>
   </div>
   <!--end of contact section-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>