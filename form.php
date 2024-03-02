<?php
$conn = new mysqli('localhost', 'root', '', 'registerform');
if(!$conn)
{
    echo "connected.";
}
if(isset($_POST['sub']))
{
    $fname=$_POST['fn'];
    $lname=$_POST['ln'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $mobile=$_POST['mn'];
    $address=$_POST['add'];
    $state=$_POST['st'];
    $city=$_POST['ci'];
    $zip=$_POST['zip'];
    $sql = "insert into regtable (FirstName, LastName, Email, DOB, Address, MobileNumber, State, City, Zip)
    values('$fname', '$lname','$email', '$dob', '$address','$mobile', '$state', '$city', '$zip')";
    $res=mysqli_query($conn, $sql);
    if(isset($res))
    {
       echo 'Successfully Registerd.';
    }
}

?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
.container{
    background-color:blueviolet;
    border:2px solid black;
  margin-top:20px;
    width:70%;

}
.head{
  text-align:center;
  margin-top:20px;
  margin-bottom:20px;
  color:white;
}
label{
  color:white;
  margin-top:10px;
  margin-right:20px;
}
.col-12{
  text-align:center;
  margin-top:40px;
}


</style>   
<script>
  function submitvalue(){
    var i= 0;

    var a = document.getElementById("fn").value;
    
    if(a=="")
    {
      document.getElementById("fnp").style.display="block";
      i++;
    }
    else{
      document.getElementById("fnp").style.display="none";
      
    }
     var b = document.getElementById("ln").value;
     if(b=="")
     {
       document.getElementById("lnp").style.display="block";
       i++;
     }
     else{
       document.getElementById("lnp").style.display="none";
       
     }
     var c = document.getElementById("email").value;
     if(c=="")
     {
       document.getElementById("emailp").style.display="block";
       i++;
     }
     else{
       document.getElementById("emailp").style.display="none";
       
     }
     
     
     var f = document.getElementById("mn").value;
     if(f=="")
     {
       document.getElementById("mnp").style.display="block";
       i++;
     }
     else{
       document.getElementById("mnp").style.display="none";
       
     }
     
     if(i==0){
      return true;
     }
     else{
      return false;
     }
  }
</script> 
</head>
    <body>
    
    <div class="container">
      
    <h1 class="head">Registration Form</h1>
<form class="row g-3" method="post" onsubmit="return submitvalue();">
  <div class="col-md-6">
    <label for="fn" class="form-label">First Name</label><label style="color:red">(*)</label>
    <input type="text" class="form-control" id="fn" name="fn">
    <p id="fnp" style="display:none; color:red">This field is required</p>
  </div>
  <div class="col-md-6">
    <label for="ln" class="form-label">Last Name</label><label style="color:red">(*)</label>
    <input type="text" class="form-control" id="ln" name="ln">
    <p id="lnp" style="display:none; color:red">This field is required</p>
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label><label style="color:red">(*)</label>
    <input type="email" class="form-control" id="email" name="email">
    <p id="emailp" style="display:none; color:red">This field is required</p>
  </div>
  <div class="col-md-4">
    <label for="dob" class="form-label">DOB</label>
    <input type="date" class="form-control" id="dob" name="dob">
    <p id="dobp" style="display:none; color:red">This field is required</p>
  </div>
  
  
  <div class="col-11">
    <label for="add" class="form-label">Address</label>
    <input type="text" class="form-control" id="add" placeholder="Apartment, studio, or floor" name="add">
    <p id="addp" style="display:none; color:red">This field is required</p>
  </div>
  <div class="col-md-6">
    <label for="mn" class="form-label">Mobile Number</label><label style="color:red">(*)</label>
    <input type="number" class="form-control" id="mn" name="mn">
    <p id="mnp" style="display:none; color:red">This field is required</p>
  </div>
  <div class="col-md-4">
    <label for="st" class="form-label">State</label>
    <input type="text" class="form-control" id="st" name="st">
    <p id="stp" style="display:none; color:red">This field is required</p>
  </div>
  <div class="col-md-4">
    <label for="ci" class="form-label">City</label>
    <input type="text" class="form-control" id="ci" name="ci">
    <p id="cip" style="display:none; color:red">This field is required</p>
  </div>
  <div class="col-md-2">
    <label for="zip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="zip" name="zip">
  </div>
  
  <div class="col-12">
    <button  class="btn btn-dark" name="sub">Register</button>
  </div>
</form>
</div>
</body>
</html>