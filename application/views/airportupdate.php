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
	background-image:url("");
	background-size:cover;
}
	</style>
</head>
<body class="bi">
	

	
	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/airportupdate1">
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
		Airport name:</td>
		<td><input type="text" name="aname" value="<?php echo $row1->aname;?>">
		</td>
	</tr>
	

		
		<tr>
<td>
Country:</td>
<td><input list="Country" name="cntry" value="<?php echo $row1->cntry;?>" >
<datalist id="Country">
<option value="India">
<option value="America">
<option value="Australia">
<option value="China">
<option value="Brazil">
</datalist></td>
</tr>
	<tr>
				<td>
		State:</td>
		<td><input type="text" name="state" value="<?php echo $row1->state;?>">
		</td>
	</tr>
	
		
	
	<tr>
		<td>
		Contact:</td>
		<td><input type="text" name="contact" value="<?php echo $row1->contact;?>"></td>
	</tr>
	
	<tr>
				<td>
		Location:</td>
		<td><input type="text" name="loc" value="<?php echo $row1->loc;?>">
		</td>
	</tr>
	
		
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