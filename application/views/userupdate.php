<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
	*{
	padding:0px;
	margin:0px;
}
	table,td{
		padding: 20px;
		font-size: 20px;
	}
	
h1{
	text-align: center;
	color: red;
	font-size: 50px;
}

	.bi{
	background-image:url("../img/20.jpg");
	background-size:cover;
}
	</style>
</head>
<body class="bi">
	

	
	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/reguserupdate">
		<?php
			
	if(isset($user_data))
	{
		foreach($user_data->result() as $row1)
		{
			?>
		<fieldset style="width:500px;height:700px; background-color:rgba(0,0,0,0.6); margin-top: 50px;">
			<legend style="color: red"><strong></strong></legend>

			
		<table>

			<tr>
				<td>
		First name:</td>
		<td><input type="text" name="fname" value="<?php echo $row1->fname;?>">
		</td>
	</tr>
	

		
		<tr>
				<td>
		Last name:</td>
		<td><input type="text" name="lname" value="<?php echo $row1->lname;?>">
		</td>
	</tr>
	<tr>
				<td>
		Age:</td>
		<td><input type="text" name="age" value="<?php echo $row1->age;?>">
		</td>
	</tr>
	<tr>
		<td>Gender:</td>
					<td><select name="gender"><option><?php echo $row1->gender;?></option>
						<option>Male</option>
						<option>Female</option></select></td></tr>
						<tr><td>Address:</td>
		<td><textarea name="address"><?php echo $row1->address;?></textarea></td></tr>
		
	
	<tr>
		<td>
		Phone number:</td>
		<td><input type="text" name="phno" value="<?php echo $row1->phno;?>"></td>
	</tr>
	
	<tr>
				<td>
		Adhar Number:</td>
		<td><input type="text" name="adno" value="<?php echo $row1->adno;?>">
		</td>
	</tr>
	
		<tr><td>Email:</td>
		<td><input type="Email" name="email" value="<?php echo $row1->email;?>" ></td></tr>
		<tr><td><input type="submit" name="update" value="Update"></td></tr>
		
		


	</table>
	<?php
		}
	}
	?>
	
</fieldset>


	</form>

</body>
</html>