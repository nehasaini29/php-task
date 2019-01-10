<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Company task</title>
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
            <div id="getusers">
              <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">profile-pic</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      include "db.php";
                      $query_user="select * from user";
                      $res_user=mysqli_query($con,$query_user);
                      while($row_user=mysqli_fetch_array($res_user))
                    {
                      ?>
                  <tr>
                    <td><?php echo $row_user['username'];?></td>
                    <td><?php echo $row_user['email'];?></td>
                    <td><?php echo $row_user['profile_pic'];?></td>
                  </tr>
                <?php
              }
              ?>

                </tbody>
              </table>
              
            </div>
          </div>
          <div class="col-md-4">
          </div>
      </div>
  </div>
  <?php include "script.php" ?>  
</body>
</html>