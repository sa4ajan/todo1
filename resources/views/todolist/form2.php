<!DOCTYPE html>
<html>
<head>
	<title></title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" type="text/css"/>

</head>

<body>
<h1>To-Do-Application</h1>
<div class="adding">
<p>click button to add new task
<button type="button" class="col-sm-offset-1 btn btn-success"><a href="form.html">Back</a></button></p>
</div>
<div class="col-sm-offset-2  col-xs-9">
<h3 class="bluee">Things to do....</h3>
 <div class="panel1 panel-default">
 <div class="panel-body">
			<table class="table table-condensed">
			 	<thead>
			 		 <tr> 
			 		 	<th>#</th> 
			 		 	<th>Task</th> 
			 		 	<th>date</th>
			 		 	<th>View</th>
			 		 	<th>Delete</th> 
			 		 	<th>Update</th>
			 		 	
			 		 </tr> 
			 	</thead> 
			 		<tbody> 
			 			<tr> 
			 				<th scope="row">1</th> 
			 					<td>Mark</td> 
			 					<td>9 feb</td>
			 					<td><span class="btn btn-success"><a href="form3.html">View</a></span></td>
			 					<td><span class="btn btn-danger">Delete</span></td>
			 					<td><span class="btn btn-info"><a href="form4.html">update</a></span></td> 
			 					
			 			</tr> 
			 			<tr> 
			 				<th scope="row">2</th> 
			 					<td>Jacob</td> 	
			 					<td>9 feb</td> 
			 					<td><span class="btn btn-success"><a href="form3.html">View</a></span></td>
			 					<td><span class="btn btn-danger">Delete</span></td>
			 					<td><span class="btn btn-info"><a href="form4.html"> update</a></span></td> 
			 			</tr> 	
			 			<tr> 
			 				<th scope="row">3</th> 
			 					<td>Larry</td> 
			 					<td>9 feb</td> 
			 					<td><span class="btn btn-success"><a href="form3.html">View</a></span></td>
			 					<td><span class="btn btn-danger">Delete</span></td>
			 					<td><span class="btn btn-info"><a href="form4.html">update</a></span></td> 
			 			</tr> 
			 		</tbody> 
			</table>
			<p>Hello world.</p>
 </div>
 </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
	
 $(document).ready(
 	function(){
 	var url = "localhost:8000/api/todo";
 	$.ajax({
 		type:"GET",
 		url:url,
 		success:function(data){
 			foreach($data as $datas){
 				$("p").show($data['tittle']);
 			}
 		}
 	});
 	});
</script>
</body>
</html>