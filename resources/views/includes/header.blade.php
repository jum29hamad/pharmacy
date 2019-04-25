<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>-->
        <script type="text/javascript" src="js/boostrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    </head>
    <body>
      <div class="container">
        <!--start of header-->
        <div class="header">
        <div class="row">
          <div class="col-sm-1.0"style="padding-top: 10px;padding-left:90px;">
            <img src="images/index4.jpg" alt="trainer"style="width:70px;height:70px">
          </div>
          <div class="col-sm-1.0"style="padding-top: 33px;font-size:14px;font-weight: bold;color:black"><h5>Run a real</h5></div>
           <div class="col-sm-1.0"style="padding-top: 33px;font-size:14px;font-weight: bold;color:grey;padding-left: 5px"><h5>business</h5></div>
           <div class="col-sm-1.0"style="paddin<!doctype html>
g-top: 15px">
            <img src="images/index6.jpg" alt="trainer"style="width:80px;height:80px">
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-1"style="padding-top: 30px;padding-left:84px;">
            <img src="images/index7.jpg" alt="trainer"style="width:30px;height:30px">
          </div>
          <div class="col-sm-4"style="padding-left: 0px;padding-top: 27px;">
            <button type="button" data-toggle="modal" data-target="#myModal"class="btn-primary"style="margin-left:15px;width:100px;height:40px;border-radius:5px;">sign in</button><button type="button"class="btn-danger"data-toggle="modal" data-target="#mineModal"style="margin-left: 90px;width:100px;height:40px;border-radius:5px">sign up</button>
            <!--start modal to sign in-->
<div class="modal" tabindex="-1" role="dialog"id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
       <label for="inputUserName"><b style="color:grey">Username</b></label>
      <input class="form-control"placeholder="enter username" type="text" id="username">
      </div>
      <div class="form-group">
      <label for="inputUserPassword"><b style="color:grey">Password</b></label>
      <input class="form-control"placeholder="enter password" type="password" id="password">
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <!--end modal to sign in-->
            <!--start modal to sign up-->
            <div class="modal" tabindex="-1" role="dialog"id="mineModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
       <label for="inputUserName"><b style="color:grey">Username</b></label>
      <input class="form-control"placeholder="enter username" type="text" id="username">
      </div>
      <div class="form-group">
      <label for="inputUserPassword"><b style="color:grey">Password</b></label>
      <input class="form-control"placeholder="enter password" type="password" id="password">
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
<!--end of header-->
<!--end modal to sign up-->
<div class="body">
  </div>
        </div>
    </body>
</html>