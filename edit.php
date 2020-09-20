



<?php 


include "BeginnerCrud.php";



$pdo = new BeginnerCrud();


$id = $_GET["edit"];


$tableName = "news";

$rt = $pdo->valueGet($tableName,$id);




?>






<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="css/main.css">


<body>
  <div id="login">
    <h3 class="text-center text-white pt-5">Crud Class - PDO</h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">

            <form id="login-form" class="form" action="master.php" method="post">
              <h3 class="text-center text-info">Post Update</h3>
              <div class="form-group">
                <label for="username" class="text-info">Username:</label><br>
                <input type="text" name="username" value="<?php echo $rt["title"]; ?>" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="text-info">Password:</label><br>
                <input type="text" name="password" id="password" value="<?php echo $rt["description"]; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="remember-me" class="text-info"><span></span> </label><br>
                <input type="submit" name="editSubmit" class="btn btn-info btn-md" value="Submit">
              </div>

              <input type="hidden" name="id" value="<?php echo $rt["id"]; ?>">

              <div id="register-link" class="text-right">
                <a href="table.php" class="text-info">Tablo Pages</a>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</body>
