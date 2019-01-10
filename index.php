<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'style.php' ?>
    <style>
        body {
            background-color: grey;
        }
    </style>
</head>
<body>
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4 jumbotron" >
            <div id="signup_form">
              <!-- <h1 class="display-4">Sign up</h1>
              <p class="lead">Provide your information to register with us.</p> -->
                <form method="POST" action="./saveuser.php" >
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address*</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Username*</label>
                            <input type="text" class="form-control" name="username" id="exampleInputPassword1" placeholder="Choose Your Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputProfilepic">profile picture*</label>
                            <input type="file" class="form-control" name="profile" id="exampleInputProfilepic" placeholder="Your profile-pic">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password*</label>
                            <input type="password" class="form-control"  name="password" id="exampleInputPassword1" placeholder="Your Password">
                        </div>
                        <br/>
                        <button type="submit" name="btnsubmit" class="btn btn-primary">Register</button>
                    </form>
                </div>
          </div>
          <div class="col-md-4">
</div>
      </div>
  </div>
  <?php include "script.php" ?>  
</body>
</html>