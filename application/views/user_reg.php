<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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
    </nav>
    <div class="container mt-3">
       <form action="#" method="post" enctype="multipart/form-data">
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
           <div class="input-group row col-md-6 mt-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            <script>
            $('#inputGroupFile01').on('change',function(){
                var fileName = $(this).val();
                $(this).next('.custom-file-label').html(fileName);
            })
        </script>
            <div class="row col-md-4 mt-3">
           <input type="submit" name="save" class="btn btn-outline-success" value="Submit"><br>
           </div>
           <!-- <div class="col-md-8">
           <button type="submit" class="btn btn-danger" name="update" onclick="location.href='<?php echo base_url();?>reg_assign/displaydata'">Update</button> 
           
           </div> -->
       </form>
    </div>
</body>
</html>