<html>
<head>
	<title></title>
		<!-- bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--  /*   <script type="text/javascript" src="js/name"></script>*/ -->
	<!-- //custom-theme -->

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/JiSlider.css" rel="stylesheet"> 
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container">

	
     <form class="well form-horizontal action=" action="/login"  method="POST">

     	{{ csrf_field() }}

		<fieldset>

		<!-- Form Name -->
		<legend><center><h2><b>Login Form</b></h2></center></legend><br>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Email</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input id = "email"  name="email" placeholder="Email" class="form-control"  type="text" required>
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label" >Password</label> 
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="password" placeholder="Password" class="form-control"  type="text" required>
		    </div>
		 </div>
		</div>


	   <div class="form-group"> 
	      <label class="col-md-4 control-label">User Type</label>
	          <div class="col-md-4 selectContainer">
	            <div class="input-group">
	              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
		           <select name="type" class="form-control selectpicker">
		        <option value=""> Select Type </option>
		       <option> Admin  </option>
		       <option> Teacher </option>
		       <option> Staff </option>
		       <option> Student </option>
		     </div>
		  </div>
	    </div>


	
		<!-- Select Basic -->

		<!-- Success message -->
		<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4"><br>
		    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit"  class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
		  </div>
		</div>





		</fieldset>
		</form>
	</div>
    
	@include('layouts.errors')

</body>
</html>