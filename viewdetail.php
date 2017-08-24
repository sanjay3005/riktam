 <?php 
 include 'db.php';
   $bool=0;
    
    
   $limit = 3;
    if(isset($_GET['page'])){ $page  = $_GET['page']; }
    else { $page=1; }
    $start_from = ($page-1) * $limit;
    $query = "SELECT * FROM regdet ORDER BY regdno ASC LIMIT $start_from, $limit";
    $result = mysqli_query($con,$query);
    if ($result->num_rows > 0) {
        $bool=1;}
         else {
        $bool=2;
    }
    if(isset($_POST['submit']))
{
$name = $_POST['name']; 
$age = $_POST['age']; 
$clg = $_POST['clg'];
$regdno = $_POST['regdno']; 
$mail = $_POST['mail']; 
 
 
    
    {
    $query="INSERT INTO regdet values ('$name','$age','$clg','$regdno','$mail')";
    $result=mysqli_query($con,$query);
    if($result)
    {
    header('Location:viewdetail.php');
    }
    else
        {
            echo "<center>registered number is already there<center>";
        }
}

}
//delete function
    if (isset($_GET['delete'])) {
        $regdno=$_GET['regdno'];
        $query = "DELETE from regdet where regdno='$regdno'";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header('Location:viewdetail.php');
        }
        # code...
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>display</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<style type="text/css">
  .login-page {
        width: 360px;
        padding: 1% 0 0 1%;
        margin: auto;
     }
.form,.outform{
  position: relative;
 
  background: #FFFFFF;
  max-width: 360px;
  margin: 0px auto 10px;
  padding: 35px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.outform
 {
    max-height:800px; 
     max-width: 1000px;
     margin: 0px auto 20px;
 }
.inputs {
  font-family: "Roboto", sans-serif;
  
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.newbutton{
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: rgba(30, 169, 174, 1);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  margin-top: 10px;
  margin-bottom: 0px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.newbutton:hover,.newbutton:active,.newbutton:focus {
  background: darkblue;
}
.newbutton:after{
  background: rgba(30, 169, 174, 1);
}
    .pagination
      {
         
        justify-content: center;
       align-items: center;
       }
      .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}
.pagination a.active {
          background-color: #4CAF50;
          color: white;
      }

      .pagination a:hover:not(.active) {background-color: #dddddd;}
</style>
 </head>
 <body>
 
 <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">student registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
    


        <div class="login-page">

  <div class="form">
  <form name="myform" method="post" action="">  
     <input  class="inputs" type="text" pattern="^[a-zA-Z\s]*$" oninvalid="setCustomValidity('Plz enter only Alphabets ')"
    onchange="try{setCustomValidity('')}catch(e){}" placeholder="name" name="name"  required/>
      <input class="inputs" type="number" max="100" placeholder="age" name="age"  required/>
       <input  class="inputs" type="text" pattern="^[a-zA-Z\s]*$" oninvalid="setCustomValidity('Plz enter only Alphabets ')"
    onchange="try{setCustomValidity('')}catch(e){}" placeholder="collegename" name="clg"   required/>
       <input  class="inputs" type="number" placeholder="rollnumber" name="regdno"  required/>
       <input  class="inputs" type="email" placeholder="abc@xyz.com" name="mail" required/>

      <input class="newbutton" type="submit" value="SUBMIT" name="submit" />
      
      </form>
  </div>
</div>




    </div>
      </div>
      
    </div>
  </div>
</div>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 
      <?php
              if($bool==1){
      echo '<div class="container">
       <div class="table-scrol">
       <div class="table-responsive">
              
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
          <thead >
            <tr>
              <th> Name</th>  
            <th>Age</th>  
            <th>College </th> 
            <th> registered no</th> 
            <th> E-mail</th> 
            <th> </th>
            <th> </th>
            </tr>
          </thead>';
          echo '<tbody>';

                while($row = $result->fetch_assoc()) {
                   

                echo '<tr>
                  
                  <td>'.$row["name"].'</td>
                  <td>'.$row["age"].'</td>
                  <td>'.$row["clg"].'</td>
                  <td>'.$row["regdno"].'</td>
                  <td>'.$row["mail"].'</td>
                  <td><form method="get" action = "edit1.php"> <input type="hidden" name="regdno" value="'.$row["regdno"].'"/>
                  <button class="btn btn-primary" type="submit">Edit</button></form>
                  </td>
                  <td><form method="get" action = ""> <input type="hidden" name="regdno" value="'.$row["regdno"].'"/>
                  <button name="delete" onclick="ask(event)"  class="btn btn-primary" type="submit">Delete</button></form>
                  </td>

                </tr>';
                    
              }


          echo '</tbody>
        </table>
        </div>
        </div>
      </div>';
       }
         $query = "SELECT COUNT(regdno) FROM regdet";
        $result = mysqli_query($con,$query);
          $row = mysqli_fetch_row($result);
          $total_records = $row[0];
          $total_pages = ceil($total_records / $limit);
          $pagLink = "<div class=\"pagination\">  <a href='viewdetail.php?page=1'>&laquo;</a>";
          for ($i=1; $i<=$total_pages; $i++) {
            $active = $i == $page ? 'class="active"' : '';

                       $pagLink .= "<a $active href='viewdetail.php?page=".$i."'>".$i."</a>";
          };
           $i = $i-1;
          echo $pagLink . "<a href='viewdetail.php?page=".$i."'>&raquo;</a></div>";
         
    ?>
        
<button style="margin-left:100px;margin-top:-20px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  ADD
</button>


</div>
<script type="text/javascript">
    function ask(a)
     {
      if(!confirm('are you sure?'))a.preventDefault();
     }
</script>
</body>
 </html>


