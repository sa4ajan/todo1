<!DOCTYPE html>
<html>
<head>
	
	<title> bootstrap form</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class="container">
		<div class="row">
		<h1>To-Do-Application</h1>
			<div class="col-sm-offset-2 col-xs-9">
				<h2>Whats your task</h2>
				  <div class="panel panel-default">
				  	  <div class="panel-body">
				  	  <h3 class="blue">Details</h4>
				  	  <br>
						<form class="form-horizontal" method="post" action="">
	  						<div class="form-group">
		  						<div class="task1">
		   				 			<label class="control-label  col-sm-2" for="Task">Title</label>
		   				 		</div>
		    					<div class="col-sm-8">
		    						<div class="task2">
				      					<input type="Title" name= "tittle"class="form-control" id="Title" placeholder="Title">
				    				</div>
				  				</div>
			  				</div>	
			  				<br>
			  				<div class="form-group">
			  				<div class="task1">
			    				<label class="control-label  col-sm-2" for="">Deadline</label></div>
			    				<div class="col-sm-8">
			    				<div class="task4"> 
			      					<input type="" class="form-control" id="Date" name ="date" placeholder="YYYY/MM/DD">
			      					</div>
			    				</div>
			  				</div>
			  				<br>
			  				<div id="special">
			  				<div class="form-group">
			  				<div class="task1">
			    				<label class="control-label  col-sm-2" for="Description">Description:</label></div>
			    				<div class="col-sm-8"> 
			    				<div class="task6">
			      					<textarea name="desc" class="form-control" name ="desc" id="Description" cols=5o rows=3 placeholder="Description" ></textarea>
							</div>
			    				</div>
			  				</div>
			  				</div>
						<br> 
		  					<div class="form-group"> 
		    					<div class="col-sm-offset-8 col-sm-8">
		     					 <button  id="idForm" type="submit" class="btn btn-info">Add</button>
								</div>
     						 </div>
     						 </div>
      			  		</div>
  				</form>
  	</div>
   	</div>

<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>

	$(document).ready(
		function(){
			$("#idForm").submit(function(){

				var url= "localhost:8000/api/todo";

				var formData  = {
				'tittle' : $('input[name=title]').val(),
				'date' : $('input[name=date]').val(),
				'desc' : $('input[name=description]').val(), 
					}

				$.ajax({
					type:'POST',
					url:url,
					data:formData
				});
			}); 
		});
</script>
</body>

</html>