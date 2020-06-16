<?php

spl_autoload_register(function($class){
	include "classes/".$class.".php";
});

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Crud Operation</title>
</head>
<body style="background: #496166">

<header>
	<div class="container pt-5 pb-3">
		<h6 class="float-left text-light mt-2">MVC View all data</h6>
		<hr style="height: 6px; background: #37474a;" class="mt-5">
	</div>
</header>


			<div class="col-md-8 mt-3 mt-md-0">
				<table class="table table-striped table-dark text-center">
				  <thead>
				    <tr>
				    	<th>Id</th>
				      <th>Name</th>
				      <th>Dptartment</th>
				      <th>Age</th>
				      <th>Number</th>
				    </tr>
				  </thead>

<?php


foreach ($user as $key => $value) {

?>
				  <tbody>
				    <tr>
				      <td><?php echo $value['id']; ?></td>
				      <td><?php echo $value['name']; ?></td>
				      <td><?php echo $value['dep']; ?></td>
				      <td><?php echo $value['age']; ?></td>
				      <td><?php echo $value['num']; ?></td>
				    </tr> 
				  </tbody>

<?php

}

?>
				</table>
			</div>
		</div>

</body>
</html>