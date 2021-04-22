
<?php
//linkection for database
include 'config.php';
//Select Database
$sql = "SELECT * FROM addpdrive";
$result = $link->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SriKrishna Polytechnic college</title>
        <link rel="icon" href="../images/log1.jpeg">        <!--google font-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
        <!--css style sheet-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css\home.css">
        <link rel="stylesheet" href="css\tab.css">
        <!--font awsome-->
        <script src="https://kit.fontawesome.com/32708dac45.js" crossorigin="anonymous"></script>
        <style type="text/css">
          body{ font: 14px sans-serif; text-align: center; display: block;}
          .theme{margin: auto; width:80%; margin: auto;margin-top:40px; margin-left:20%; border-radius: 30px;}
          .tab{width:300px; height:50px; margin: auto;margin-top:40px; border-radius: 30px;}
          .ln{width:150px;border-radius:20px; margin-left:50px;margin-top:25px; }
          .footer {position: fixed; left: 0; bottom: 0; width: 100%;color: white; text-align: center;}
        </style>
        <!--bootstrap style sheet-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>  

<body>
<!--nav bar-->
<section>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a4750;" >
    <a class="navbar-brand" href="http://www.sreis.in/skp/contact_us.htm">
      <img src="images\log1.jpeg" width="50" height="50" class="d-inline-block align-top" alt="" style="border-radius:50px;">Sri Krishana Polytechnic College
    </a>        
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="margin-left: 10%;">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active"><a  class="nav-link" href="shome.html"><i class="fa fa-fw fa-home"></i>Home</a> </li>
        <li class="nav-item active"><a  class="nav-link" href="sabout.html"><i class="fa fa-user"></i>About</a> </li>
        <li class="nav-item active"><a  class="nav-link" href="sgallary.html"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallary</a> </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>Drives</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="viewdrive.php"><i class="fa fa-user-circle" aria-hidden="true"></i>student details</a>
            <a class="dropdown-item" href="drivedet.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Drive details</a>
            <a class="dropdown-item" href="placed.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Drive result</a>
          </div>
        </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="Drives/index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>Placement</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Drives/about.php"><i class="fa fa-user-plus" aria-hidden="true"></i>About</a>
              <a class="dropdown-item" href="Drives/products.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Campus drive</a>
              <a class="dropdown-item" href="Drives/mail.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Mail us</a>
            </div>
          </li>              
          <li class="nav-item active"><li> <a class="nav-link active" href="studentProfile.php"><i class="fa fa-address-book" aria-hidden="true"></i>My Account</a></li>
          <li> <a  class="nav-link active" href="logout.php""><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li></li>
      </ul>
    </div>
  </nav>
</section>

<div>
<h2 align="center">Drive Details</h2>
<script type="text/javascript">
function printpage()
  {
  window.print()
  }
</script>
<table border="2" align="center" style="line-height:25px;border-radius:30px;">
<tr>
<th>INTERVIEW DATE</th>
<th>COMPANY</th>
<th>VENUE</th>
<th>DETAILS</th>
<th>VIEW</th>
</tr>
<?php
//Fetch Data form database
if($result->num_rows != 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['date']; ?></td>
 <td><?php echo $row['cname']; ?></td>
 <td><?php echo $row['place']; ?></td>
 <td><?php echo $row['details']; ?></td>
 <td><a href="ddelete.php?date=<?php echo $row['date']; ?>">Delete</a></td>
 </tr>
 <?php
 }
}
else
{
 ?>
 <tr><h3>No campus drives</h3></tr>
 <?php
}
?>
</table>

<br/><br/>
<?php 
		
    $num_rec_per_page=15;
    $connect = mysqli_connect("localhost","root","","demo") or die("Couldn't Connect");
    
    $sqli = "SELECT * FROM addpdrive"; 
    $rs_result = mysqli_query($connect,$sqli); //run the query
    $total_records = mysqli_num_rows($rs_result);  //count number of records
    $totalpage = ceil($total_records / $num_rec_per_page); 
    
    $currentpage = (isset($_GET['page']) ? $_GET['page'] : 1);
       if($currentpage == 0)
      {
         
      }
      else if( $currentpage >= 1  &&  $currentpage <= $totalpage  )
      {
      
        if( $currentpage > 1 && $currentpage <= $totalpage)
          {
            
            $prev = $currentpage-1;
            echo "<li><a  href='studentTable.php?page=".$prev."'></a></li>";
            
          }
      
      if($totalpage > 1){
    $prev = $currentpage-1;
      for ($i=$prev+1; $i<=$currentpage+2; $i++){
        echo "<li><a href='drivrdet.php?page=".$i."'>".$i."</a></li>";
      }
      }
      
      
      if($totalpage > $currentpage  )
      {
        $nxt = $currentpage+1;
        echo "<li><a  href='studentTable.php?page=".$nxt."' ></a></li>";
      }
    
       echo "<a>Pages:".$totalpage."</a>";
    }
     ?> 
    
<input type="button" value="Print" onclick="printpage()" />

<!--contact-->
<section class="footer" style="background-color: #3a4750;" >
  <div class="row">
    <div class="feature-box col-lg-3"><a href="https//www.facebook.com"><img src="images\logo\fb.png" width="50" height="50" class="rounded-circle" alt=""></a></div>
    <div class="feature-box col-lg-3"><a href="https://mail.google.com/mail/u/1/?view=cm&fs=1&to=principal.skp@gamil.com&tf=1"><img src="images\logo\gm.png" width="50" height="50" class="rounded-circle" alt=""></a></div>
    <div class="feature-box col-lg-3"><a href="contact.html"><img src="images\logo\wt's.png" width="50" height="50" class="rounded-circle" alt=""></a></div>
    <div class="feature-box col-lg-3"><a href="map.html"><img src="images\logo\loc.png" width="50" height="50" class="rounded-circle" alt=""></a></div>
  </div>
</section> 
    
</body>
</html>