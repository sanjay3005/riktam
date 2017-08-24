<?php
include 'db.php';
$regdno=$_GET['regdno'];
$query = "SELECT * FROM regdet where regdno = $regdno";
$result = mysqli_query($con,$query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
        $name=$row["name"];
        $age =  $row["age"];
        $clg = $row["clg"];
        $regdno = $row["regdno"];
        $mail = $row["mail"];
} else {
    echo "0 results";
}

if(isset($_POST['submit']))
{
$name = $_POST['name']; 
$age = $_POST['age']; 
$clg = $_POST['clg'];
$regdno = $_POST['regdno']; 
$mail = $_POST['mail']; 
 
 
    
    $query="UPDATE regdet SET name='$name',age='$age',clg='$clg',regdno='$regdno',mail='$mail' WHERE regdno='$regdno'" ;
    $result=mysqli_query($con,$query);
    if($result)
    {
    header('Location:viewdetail.php');
    }
   
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<style type="text/css">
.login-page {
        width: 360px;
        padding: 10% 0 0 10%;
        margin: auto;
     }
.form,.outform{
  position: relative;
 
  background: #FFFFFF;
  max-width: 360px;
  margin: 0px auto 100px;
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
  margin-bottom: -10px;
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
	</style>
</head>
<body>
    <div class="outform">
     <p style="font-family: arial;font-size:30px;color: rgba(30, 169, 174, 1);">Student Registration form</p>
<hr>

    	<div class="login-page">

  <div class="form">
  <form name="myform" method="post" action="">  
     <input  class="inputs" type="text" pattern="^[a-zA-Z\s]*$" oninvalid="setCustomValidity('Plz enter only Alphabets ')"
    onchange="try{setCustomValidity('')}catch(e){}" id="iname" placeholder="name" name="name"  required/>
      <input class="inputs" type="number" id="iage" max="100"  placeholder="age" name="age"  required/>
       <input  class="inputs" type="text" pattern="^[a-zA-Z\s]*$" oninvalid="setCustomValidity('Plz enter only Alphabets ')"
    onchange="try{setCustomValidity('')}catch(e){}" id="iclg"  placeholder="collegename" name="clg"   required/>
       <input  class="inputs" type="number" id="iregdno"  placeholder="rollnumber" name="regdno"  readonly required/>
       <input  class="inputs" type="email" id="imail"  placeholder="abc@xyz.com" name="mail" required/>

      <input class="newbutton" type="submit" value="UPDATE" name="submit" />
      
      </form>
  </div>
</div>
</div>

  </div>
     <script>
      var name = "<?php echo $name ?>";
      var age = "<?php echo $age ?>";
      var clg = "<?php echo $clg ?>";
      var regdno = "<?php echo $regdno ?>";
      var mail = "<?php echo $mail ?>";
      document.getElementById("iname").value = name;
      document.getElementById("iage").value = age;
      document.getElementById("iclg").value = clg;
      document.getElementById("iregdno").value = regdno;
      document.getElementById("imail").value = mail;
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
