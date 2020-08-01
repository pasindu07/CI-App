<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <!-- <div class="p-3 mb-2 bg-info text-white">
    <h1>User Details</h1>
    </div> -->
    <nav class="navbar navbar-expand-md navbar-dark bg-info ">
    <a class="navbar-brand" href="http://localhost/ci/assignment/reg_assign/submitdata">Home</a>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>/reg_assign/displaydata" >View Records</a>
      </li>
      </ul>
    </nav>
    <div class="container mt-3">
       <form action="#" method="post">
           <div class="row col-md-6">
           Name <input type="text" name="name" class="form-control mb-1" value="<?php echo set_value('name')?>">
            <?php
                if(form_error('name')){
                    echo "<span style='color:red'>".form_error('name')."</span>";
                }
            ?>
           </div>
           <div class="row col-md-6">
           Age <input type="number" name="age" class="form-control mb-1" value="<?php echo set_value('age')?>">
           <?php
           if(form_error('age')){
               echo "<span style='color:red'>".form_error('age')."</span>";
           }
           ?>
           </div>
           <div class="row col-md-6">
           Email <input type="text" name="email" class="form-control mb-1" value="<?php echo set_value('email')?>">
           <?php
           if(form_error('email')){
               echo "<span style='color:red'>".form_error('email')."</span>";
           }
           ?>
           </div>
           <div class="row col-md-6">
           Mobile <input type="text" name="mobile" class="form-control mb-1" value="<?php echo set_value('mobile')?>">
           <?php
           if(form_error('mobile')){
               echo "<span style='color:red'>".form_error('mobile')."</span>";
           }
           ?>
           </div>
           <div class="row">  
            <div class="col-md-4">
           <input type="submit" name="save" class="btn btn-outline-success" value="Submit"><br>
           <!-- <div class="row mt-3 col-md-6">
           <a href="<?php echo base_url();?>/reg_assign/displaydata" class="badge badge-info">View Records</a>
           <div> -->
           </div>
           <!-- <div class="col-md-8">
           <button type="submit" class="btn btn-danger" name="update" onclick="location.href='<?php echo base_url();?>reg_assign/displaydata'">Update</button> 
           
           </div> -->
           </div>
       </form>
    </div>
</body>
</html>