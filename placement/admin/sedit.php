<?php
include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($link,"UPDATE student set id='" . $_POST['id'] . "', username='" . $_POST['username'] . "', email='" . $_POST['email'] . "',phoneno='" . $_POST['phoneno'] . "', address='" . $_POST['address'] . "',branch='" . $_POST['branch'] . "',sem='" . $_POST['sem'] . "',fathername='" . $_POST['fathername'] . "',mothername='" . $_POST['mothername'] . "',dob='" . $_POST['dob'] . "',aggre='" . $_POST['aggre'] . "'  WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($link,"SELECT * FROM student WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SriKrishna Polytechnic college</title>
        <link rel="icon" href="../images/log1.jpeg">
        <!--google font-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
        <!--css style sheet-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style type="text/css">
          body{ font: 14px sans-serif; text-align: center; display: block;}
          .theme{margin: auto; width:80%; margin: auto;margin-top:40px; margin-left:20%; border-radius: 30px;}
          .tab{width:300px; height:50px; margin: auto;margin-top:40px; border-radius: 30px;}
          .tab1{width:300px; height:55px; margin: auto;margin-top:40px; border-radius: 50px;text-align: center;}
          .ln{width:150px;border-radius:20px; margin-left:50px;margin-top:25px; }
          .footer {position: fixed; left: 0; bottom: 0; width: 100%;color: white; text-align: center;}
        </style>

        <!--font awsome-->
        <script src="https://kit.fontawesome.com/32708dac45.js" crossorigin="anonymous"></script>
    
        <!--bootstrap style sheet-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>  

<body>
<!--nav bar-->
<section >
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a4750;" >
    <a class="navbar-brand" href="http://www.sreis.in/skp/contact_us.htm">
      <img src="images\log1.jpeg" width="50" height="50" class="d-inline-block align-top" alt="" style="border-radius:50px;">Sri Krishana Polytechnic College
    </a>        
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="margin-left: 3%;">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
        <li class="nav-item active"><a  class="nav-link" href="adminHome.html"><i class="fa fa-fw fa-home"></i>Home</a> </li>
        <li class="nav-item active"><a  class="nav-link" href="about.html"><i class="fa fa-user"></i>About</a> </li>
        <li class="nav-item active"><a  class="nav-link" href="gallary.html"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallary</a> </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="../Drives/index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>Campus drive</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Drives/about.php"><i class="fa fa-user-plus" aria-hidden="true"></i>About</a>
            <a class="dropdown-item" href="Drives/products.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Campus drive</a>
            <a class="dropdown-item" href="Drives/mail.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Mail us</a>
          </div>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>Student</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="newStudent.php"><i class="fa fa-user-plus" aria-hidden="true"></i>add student</a>
            <a class="dropdown-item" href="studentTable.php"><i class="fa fa-user-circle" aria-hidden="true"></i>student profile</a>
            <a class="dropdown-item" href="seligibility.php"><i class="fa fa-user-circle" aria-hidden="true"></i>check eligibility</a>
          </div>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>Company</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="newCompany.php"><i class="fa fa-user-plus" aria-hidden="true"></i>add company</a>
            <a class="dropdown-item" href="companyTable.php"><i class="fa fa-fw fa-user"></i>company profile</a>
          </div>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>Admin</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="newAdmin.php"><i class="fa fa-user-plus" aria-hidden="true"></i>add admin</a>
            <a class="dropdown-item" href="adminTable.php"><i class="fa fa-fw fa-user"></i>admin profile</a>
            </div>
        </li>
        <li class="nav-item active"><a  class="nav-link" href="aprofile.php"><i class="fa fa-user"></i>myprofile</a> </li>
        <li class="nav-item active"><a  class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a> </li>
      </ul>
    </div>
  </nav>
</section>
 

<form name="frmUser" method="post" action=""><br/>
  <h3>Enter the all details agian </h3>
  <div><?php if(isset($message)) { echo $message; } ?></div>
  <div style="padding-bottom:5px;"><a href="studentTable.php">student List</a></div>
  <table  align="center" style="border-radius:30px; width:45%;" class="tab">
  <div class="row form-group">
  <tr>
  <div class="col-lg-6 col-md-6 form-group">
    <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
    <td><label>Name:</label></td><td><input type="text" class="tab1" name="username" value="<?php echo $row['username'];?>" ></td>
    <td><label>email:</label></td><td><input type="email" class="tab1" name="email" value="<?php echo $row['email']; ?>" ></td>
  </div>
  </tr>
  <tr>
  <div class="col-lg-6 col-md-6 form-group">
    <td><label>phoneno:</label></td><td><input type="text" class="tab1" name="phoneno" value="<?php echo $row['phoneno']; ?>"></td>
    <td><label>address:</label></td><td><input type="text" class="tab1" name="address" value="<?php echo $row['address']; ?>" ></td>
  </div>
  </tr>
  <tr>
  <div class="col-lg-6 col-md-6 form-group">
    <td><label>branch:</label></td><td><select class="tab1" value="<?php echo $row['branch']; ?>" name="branch" required>
          <option selected></option>
          <option>COMPUTER SCIENCE ENGINEERING</option>
          <option>MECHANICAL ENGINEERING</option>
          <option>CIVIL ENGINEERING</option>
          <option>ELECTRICAL ENGINEERING</option>
          <option>ELECTRICAL AND ELECTRONIC ENGINEERING</option>
      </select></td>
    <td><label>sem:</label></td><td><select class="tab1" value="<?php echo $row['sem']; ?>" name="sem" required>
          <option selected ></option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
      </select></td>
  </div> 
  </tr>
  <tr>
  <div class="col-lg-6 col-md-6 form-group">
    <td><label>fathername:</label></td><td><input type="text" class="tab1" name="fathername" value="<?php echo $row['fathername']; ?>" ></td>
    <td><label>mothername:</label></td><td><input type="text" class="tab1" name="mothername" value="<?php echo $row['mothername']; ?>" ></td>
  </div>
  </tr>
  <tr>
  <div class="col-lg-6 col-md-6 form-group">
    <td><label>date of brith:</label></td><td><input type="date" class="tab1" name="dob" value="<?php echo $row['dob']; ?>" ></td>
    <td><label>aggregate:</label></td><td><input type="text" class="tab1" name="aggre" value="<?php echo $row['aggre']; ?>"></td>
  </div>
  </tr>
  <tr><td></td><td><button type="submit" class="ln btn btn-primary" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button></td><td></td><td><a href="studentTable.php"><button type="button" class="ln btn btn-primary" value="button">Cancel</button></a></td></tr>
  </table>
  <!-- Alert for Updating -->
  <script>
   function update(){
     var x;
     if(confirm("Updated company Sucessfully") == true){
     x= "update";
     }
    }
  </script>
</form>
<br/><br/>

<!--contact-->
<section class="footer" style="background-color: #3a4750;" >
      <div class="row">
        <div class="feature-box col-lg-3"><a href="https//www.facebook.com"><img src="images\logo\fb.png" width="50" height="50" class="rounded-circle" alt=""></a>
        </div>
        <div class="feature-box col-lg-3"><a href="https://mail.google.com/mail/u/1/?view=cm&fs=1&to=principal.skp@gamil.com&tf=1"><img src="images\logo\gm.png" width="50" height="50" class="rounded-circle" alt=""></a>
        </div>
        <div class="feature-box col-lg-3"><a href="contact.html"><img src="images\logo\wt's.png" width="50" height="50" class="rounded-circle" alt=""></a> 
        </div>
        <div class="feature-box col-lg-3"><a href="map.html"><img src="images\logo\loc.png" width="50" height="50" class="rounded-circle" alt=""></a>
        </div>
      </div>
    </section> 
    
    </body>
</html>