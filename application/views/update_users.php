<!DOCTYPE html>
<html>
<head>
    <title>Update Records</title>
    <!-- <style>
        table,td,th{
            border: 1px solid black;
        }
        td{
            padding: 5px;
            
        }
    </style> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <a class="navbar-brand" href="http://localhost/ci/assignment/reg_assign/submitdata">Update Details</a>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/reg_assign/submitdata" >Home</a>
      </li>
      </ul>
    </nav>
   <?php foreach($data as $row){ ?>
    <form method="post">
    <table style="width:100%;" class="table">
        <tr>
            <td>Name</td>
            <td><input type="text" class="form-control col-md-4" name="name" value="<?php echo $row->name;?>"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" class="form-control col-md-4" name="age" value="<?php echo $row->age;?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" class="form-control col-md-4" name="email" value="<?php echo $row->email;?>"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" class="form-control col-md-4" name="mobile" value="<?php echo $row->phone;?>"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center;"><input type="submit" name="update" value="Update Record" class="btn btn-primary"></td>
        </tr>
    </table>
    </form>
<?php }?>
</body>
</html>