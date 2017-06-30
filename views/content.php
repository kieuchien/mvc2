<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Creat Category</title>   
      <link rel="stylesheet" href="../public/css/dashboard.css">  
</head>
<style>
  form{
  padding: 10px;
  margin: auto;

}
td
{
height: 50px;
line-height: 50px;
padding:0 50px;
white-space: nowrap;
text-align: center;
background: #ffffff;
background: #ffffff;
border: 2px solid #000000;
}
.author{
    background-color: #CCFFFF;
}

</style>
<body>
  <div id="wrap">
    <div id="regbar"> 
        <div id="navthing">
          <h2><a href="#" id="loginform">Dashboard</a> | <a href="../controller/logout.php">Logout</a></h2>    
        </div>        
    </div>
    <div class="col-sm-6-offset-3">
        <form action="../controller/addcategory.php" method="post" >
            <h2>Create Category</h2>
            <span><strong>Category</strong></span>
            <input type="text" name="nameauthor" placeholder="Nhap ten" style="width: 200px;height: 30px; border-radius: 7px;">
            <input type="text" name="age" placeholder="Nhap tuoi" style="width: 200px;height: 30px; border-radius: 7px;">
            <input type="text" name="phone" placeholder="Nhap so dien thoai" style="width: 200px;height: 30px; border-radius: 7px;">
            <input type="submit" name="submit"style="width: 200px;height: 30px; border-radius: 7px;">
        </form>
        <form class="bangtable" style="text-align: center;" >
          <table border="1" class="author" style="text-align: center;">
             <tr>
                 <th style="color: red;background-color: #00FF00;">Id</th>
                 <th style="color: red;background-color: #00FF00;">Name</th>
                 <th style="color: red;background-color: #00FF00;">Age</th>
                 <th style="color: red;background-color: #00FF00;">Phone</th>   
                 <th style="color: red;background-color: #00FF00;">Edit</th>
                 <th style="color: red;background-color: #00FF00;">Delete</th>             
              </tr>
              
              <?php 
                  include ("../models/category.php");
                  while ($row = mysqli_fetch_array($tb,MYSQLI_NUM)) {                                 
              ?>
              <tr class="table" style="text-align: center;">  
                
                <td><?php echo $row[0] ;?></td>
                <td><?php echo $row[1] ;?></td>
                <td><?php echo $row[2] ;?></td>
                <td><?php echo $row[3] ;?></td>
                <td><a href="editcategory.php?id=<?php echo $row[0]; ?>">Edit</a></td>
                <td><a href="../controller/deletecategory.php?id=<?php echo $row[0]; ?>" onclick='return deleteAction();'>Delete</a></td>
                 
              </tr>
              <?php } ?>
          </table>
        </form>
        
    </div>
  </div>



    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript">
      function  deleteAction (){
        return confirm("Ban co muon xoa truong nay khong?");
      }
    </script>

</body>
</html>
