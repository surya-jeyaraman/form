<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SURYA BOOTSTRAP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<h1 align="center"></h1>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
	<div class="container">
		<div class="row col-md-6 col-md-offset-3">
			<div class="panel panel-warning">
			<!-- <div class="panel panel-primary"> -->
				<div class="panel-heading" align="center">
   		<b>Responsive Registration Form</b></div>

  
  		<div class="panel-body">
        <div class="form-group">
      <label  for="name">Name</label>
      <span>
        <i class="icon-astriek icon-2x"></i>
      </span>
      <input type="name" class="form-control" id="pwd" placeholder="Enter Name" name="name">
    </div>

   <div class="form-group">
   	<!-- <div class="panel-heading" align="center">
   		<b>Responsive Registration Form</b></div>
   	<div class="panel-body"></div>
 -->
      <label for="input">Email:</label>
      <span class="icon">
        <i class="fa fa-envelope" aria-hidden="true"></i>

      <input type="email" class="form-control" id="email" placeholder=" Enter email" name="email">
    </div>
    <div class="form-group">
      <label  for="pwd">Password:</label>
      <span>
      	<i class="icon-astriek icon-2x"></i>
      </span>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="upload">Upload Health Report</label>
      <form action="/action_page.php">
  <input type="file" id="myFile" name="filename">
</form>
    </div>
    <div class="form-group">
    	<input type="radio" name="male">Male
    	<input type="radio" name="female">Female
    	<input type="radio" name="others">Others
    </div>
    
    
    
    <button type="button" class="btn btn-warning" >Register</button>
  </form>
</div>
</div>

</body>
</html>