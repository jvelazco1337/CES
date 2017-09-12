<!DOCTYPE html>
<html>
<head>
	<title>Code Igniter App</title>

	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cyborg/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

	<script>
		$(function()
		{
			$("#myForm").validate(
			{
				rules: 
				{
					first_name: {
						required: true
					},
					last_name: {
						required: true
					},
					email: {
						required: true,
						email: true
					},
				}
			});
		});
	</script>

	<style>
		body {
    		text-align: center;
    		padding-bottom: 200px;
    	}

    	h4{
    		font-size: 20px;
    	}

		.mynavbar .nav {
			float:none;
		}
		.mynavbar .nav li {
			display:inline-block;
			float:none;
			margin:0 20px;
			vertical-align:middle;
		}

		.mynavbar .nav li a:hover {
			background:red
		}
		.mynavbar .nav li.mylogo a, .mynavbar .nav li.mylogo a:hover {
			background:transparent;
			max-width:150px;
		}

		th{
    		text-align: center;
		}

		


		
	</style>
	



</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
				<div class="container"> 
				<div class="collapse navbar-collapse mynavbar" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav ">
										<li class="mylogo"><a href="http://localhost/CES-App/"><img src="https://d2oc0ihd6a5bt.cloudfront.net/wp-content/uploads/sites/1724/2016/04/CES_Logo_R1.png" alt="Logo"></a></li>
									
								</ul>
						</div> 
				</div>		
		</nav>

	<br>
	<h1>Code Igniter App</h1>


	<form id="myForm" method="post" action="<?php echo base_url()?>main_controller/form_validation">

		<!-- if coming from added method then display message -->
		<?php
			if($this->uri->segment(2)=="inserted")
			{
				echo "<h3>SUCESS!</h3>";
			}
		?>


		<!-- first name label and input -->
		<div>
			<label for="first_name">First Name: </label><br>
			<input id="first_name" class="form_control" type="text" name="first_name" placeholder="John">
			<span class="error"><?php echo form_error("first_name"); ?></span> <!-- Validation -->
		</div><br>

		<!-- last name label and input -->
		<div>
			<label for="last_name">Last Name: </label><br>
			<input id="last_name" class="form_control" type="text" name="last_name" placeholder="Doe">
			<span class="error"><?php echo form_error("last_name"); ?> <!-- Validation -->
		</div><br>

		<!-- email label and input -->
		<div>
			<label for="email">Email: </label><br>
			<input id="email" class="form_control" type="email" name="email" placeholder="johndoe@gmail.com">
			<span class="error"><?php echo form_error("email"); ?></span> <!-- Validation -->
		</div><br>

		<!-- month select, values assigned for DB -->
		<div>
		<label for="month">Date of Birth: </label><br>
		<select id="month" name="month" >
			<option>Month</option>
			<option value="1">Jan</option>
			<option value="2">Feb</option>
			<option value="3">Mar</option>
			<option value="4">Apr</option>
			<option value="5">May</option>
			<option value="6">Jun</option>
			<option value="7">Jul</option>
			<option value="8">Aug</option>
			<option value="9">Sep</option>
			<option value="10">Oct</option>
			<option value="11">Nov</option>
			<option value="12">Dec</option>
		</select>

		<!-- day select with loop -->
		<select id="day" name="day">
			<option>Day</option>
			<?php
			for($i=1;$i<=31;$i++)
			{
			    echo '<option value='.$i.'>'.$i.'</option>';
			}
		?>
		</select>

		<!-- year select with loop-->
		<select id="year" name="year">
			<option>Year</option>
			<?php
				for($i=1920;$i<=2017;$i++)
				{
				    echo '<option value='.$i.'>'.$i.'</option>';
				}
			?>					
		</select>
		</div><br>

		<!-- color picker input, reads hex -->
		<div>
			<label for="favcolor">Favorite Color: </label><br>
			<input id="favcolor" type="color" name="favcolor">
		</div>

		
		<!-- submit button -->
		<div> <br> 
            <input id="insert" type="submit" name="insert" value="Insert" class="btn btn-info" />  
        </div>
	</form>


	<br><br><br>


	<h2>Database Table</h2>

	<div id="db_table">
		<table border="1" style="margin: 0px auto; width:75%;">
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Date of Birth</th>
					<th>Favorite Color</th>
				</tr>
			</thead>
			
			<tbody>
				<?php 
				if($get_data->num_rows() > 0)
				{
					foreach ($get_data->result() as $row) 
					{
				?>		<tr >
							<td><?php echo $row->id; ?></td>	
							<td><?php echo $row->first_name; ?></td>	
							<td><?php echo $row->last_name; ?></td>	
							<td><?php echo $row->email; ?></td>	
							<td><?php echo $row->dob; ?></td>
							<td style="background-color: <?php echo $row->favcolor; ?>"></td>
								
						</tr>
				<?php  
					}
				}
				else
				{
				?>
					<tr>
						<td colspan="6">No Information Found.</td>
					</tr>
				<?php 		
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>