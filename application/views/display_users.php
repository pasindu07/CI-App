<!DOCTYPE html>
<html>
<head>
    <title>Display Records</title>
    <style>
        .myrow{
            height:300px;
        }
    </style>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-success ">
    <a class="navbar-brand" href="http://localhost/ci/assignment/reg_assign/submitdata">User Details</a>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/reg_assign/submitdata" >Home</a>
      </li>
      </ul>
    </nav>
    <div class="container">
    
    <table width="100%;" class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Delete</th>
            <th>Update</th>
            <!-- <th><a href="<?php echo base_url();?>/reg_assign/submitdata" class="badge badge-info">Home</a></th> -->
        </tr>
    <?php
     foreach($data as $row){
         echo "<tr>";
         echo "<td>$row->id</td>";
         echo "<td>$row->name</td>";
         echo "<td>$row->age</td>";
         echo "<td>$row->email</td>";
         echo "<td>$row->phone</td>";
         echo "<td><a href='deletedata?id=$row->id'>Delete</a></td>";
         echo "<td><a href='updatedata?id=$row->id'>Update</a></td>";
         echo "</tr>";
     }
    ?>
            
    
    </table>
    </div>
    </form>
    <div class="container">
     <form action="<?php echo base_url();?>/pdf_gen/generate_pdf">
        <input type="submit" value="Generate PDF Report" class="btn btn-primary">
     </form>
    </div>
</body>
</html>
