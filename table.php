

<?php 

include "BeginnerCrud.php";



$pdo = new BeginnerCrud();


$rt = $pdo->valueList("news");


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

              <table class="table table-striped custab">
                <thead>
                    <a href="index.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Parent ID</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <?php foreach ($rt as $value ) {  ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['title']; ?></td>
                        <td><?php echo $value['description']; ?></td>
                        <td class="text-center">
                            <a class='btn btn-info btn-xs' href="edit.php?edit=<?php echo $value['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                            <a href="master.php?action=del&id=<?php echo $value['id']; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a>
                        </td>
                    </tr>
                <?php } ?>


            </table>

        </div>
    </div>
</div>
</div>
</div>
</body>
