<html>
<head>
	<title></title>
		<!-- bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--  /*   <script type="text/javascript" src="js/name"></script>*/ -->
	<!-- //custom-theme -->

	<script type="text/javascript">
		    function Validate() {
		        var password = document.getElementById("password").value;
		        var confirmPassword = document.getElementById("confirm_password").value;
		        if (password != confirmPassword) {
		            alert("Passwords do not match.");
		            return false;
		        }
		        return true;
		    }
	</script>



	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/JiSlider.css" rel="stylesheet"> 
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container">

	
     <form class="well form-horizontal action=" action="/staff"  method="POST">

     	{{ csrf_field() }}

		<fieldset>

		<!-- Form Name -->
		<legend><center><h2><b>Staff  &nbsp;  Registration Form</b></h2></center></legend><br>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Full Name</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="fullName" placeholder="First Name" class="form-control"  type="text" required>
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label" >Father Name</label> 
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input name="fatherName" placeholder="Last Name" class="form-control"  type="text" required>
		    </div>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" >Mother Name</label> 
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input name="motherName" placeholder="Last Name" class="form-control"  type="text" required>
		    </div>
		  </div>
		</div>


   <div class="form-group"> 
	    <label class="col-md-4 control-label">Gender</label>
	     <div class="col-md-4 selectContainer">
	       <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
		     <select name="gender" class="form-control selectpicker">
		      <option value="">Select</option>
		      <option>Male</option>
		      <option>Female</option>
		    </select>
		  </div>
		</div>
	</div>

	 <div class="form-group">
		  <label class="col-md-4 control-label">Birthday</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="birthDate" placeholder="" class="form-control"  type="date">
		    </div>
		  </div>
	</div>



		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Username</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="user_name" placeholder="Username" class="form-control"  type="text" required>
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label" >Password</label> 
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input name="password" placeholder="Password" class="form-control"  type="password" id="password" required>
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label" >Confirm Password</label> 
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password" id="confirm_password" required>
		    </div>
		  </div>
		</div>





		<!-- Text input-->
		       <div class="form-group">
		  <label class="col-md-4 control-label">E-Mail</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
		    </div>
		  </div>
		</div>


		<!-- Text input-->
		       
		<div class="form-group">
		  <label class="col-md-4 control-label">Contact No.</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		  <input name="contact" placeholder="" class="form-control" type="text">
		    </div>
		  </div>
		</div>
 

		<div class="form-group">
		  <label class="col-md-4 control-label">Address</label>  
		  <div class="col-md-5 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="address" placeholder="Address" class="form-control"  type="text">
		    </div>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label">About</label>  
		  <div class="col-md-6 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="about" placeholder="About" class="form-control"  type="text">
		    </div>
		  </div>
		</div>


		<div class="form-group">
		  <label class="col-md-4 control-label">Picture</label>  
		  <div class="col-md-5 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input type="file" name="image">
		  <label>Select your image</label>
		    </div>
		  </div>
		</div>
		
		 <input type="hidden" name="role" value= "4" > 
		
		<!-- Select Basic -->

		<!-- Success message -->
		<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4"><br>
		    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit"  class="btn btn-warning" onclick="Validate()" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
		  </div>
		</div>

		</fieldset>
		</form>
	</div>
    
	@include('layouts.errors')

</body>
</html>