<?php
session_start();
 include('database.php');
$ses=$_SESSION['name'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>AUCTIONING FORUM</title>

<meta name="keywords" content="photo blog template, free website layout, CSS, download HTML" />

<meta name="description" content="Photo Blog Template, Free xHTML/CSS Layout, Free Website Template from TemplateMo.com" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#templatemo_container #templatemo_left_section #templatemo_left_content #form3 table {
	text-align: center;
}
</style>
</head>

<body>

<div id="templatemo_container">

  <div id="templatemo_left_section">

   <div id="templatemo_left_header">

     <div id="templatemo_left_title"> AUCTIONING FORUM </div>

     <div id="templatemo_left_slogan"> Enjoy With Bidding Application...</div>

     <div id="templatemo_latest"><a href="#"> <?php echo "$ses";  ?> </a></div>

   </div>

   <div id="templatemo_left_menu">

     <div class="templatemo_topmenu">

       <ul>
         <li><a href="user_profile.php" >HOME</a></li>
         <li ><a href="add_product.php">ADD PRODUCT</a> </li>
          <li><a href="my_bid.php" >MY BIDDING</a></li>
         <li class="current"><a href="category.php">CATEGORIES</a></li>
        
          <li><a href="index.html">LOGOUT</a></li>
       </ul>

      </div>

   </div>

   <div id="templatemo_left_content">

     <h1>BIDDING DETAILS</h1>

     <form id="form3" name="form3" method="post" action="">
       <table width="100%" border="0" cellspacing="5">
         <tr>
        
       </table>
     </form>
     <table width="90%" border="0">
       <tr>
         <td width="26%" height="23">PRODUCT NAME</td>
         <td width="23%">BEDDER NAME</td>
         <td width="20%">BIDDING PRICE</td>
         <td width="31%">E-MAIL</td>
       </tr>
        <?php
		 include('database.php');
		$s=mysqli_query($con,"select * from bidding where email='$ses'");
while($row=mysqli_fetch_array($s))
{
		 ?>
         <tr>
          <td><a href="my_bid_details.php?id=<?php echo $row['product_name']; ?>"><?php echo $row['product_name']; ?></a></td>
         <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['bid_price']; ?></td>
           <td><?php echo $row['email']; ?></td>
         </tr>
         <?php
}
?>
     </table>
     <p>&nbsp;</p>
   </div>

  </div>

  <div id="templatemo_right_section">

    <div id="templatemo_right_top"></div>

    <div id="templatemo_right_search">

      <form id="form1" name="form1" method="post" action="">
      </form>

    </div>
    <div id="templatemo_contact"><h2>QUICK CONTACT</h2>

      <p>Tel: 010-100-1001<br />

        Fax: 020-200-2002<br />

        Email: info [at] AUCTIONING FORUM</p>

    </div>

  </div>

  <div id="templatemo_footer">Copyright ©  Your AUCTIONING FORUM | Designed by <a href="" target="_parent" title="">Live Technologies</a></div>

</div>
</body>
</html>