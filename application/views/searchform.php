<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">

<style>
	*{
	padding:0px;
	margin:0px;
}
	table,td{
		padding: 20px;
		font-size: 20px;
	}
	.bi{
	background-image:url("../img/23.jpg");
	background-size:cover;
}
h3{
	text-align: center;
	color: red;
	font-size: 50px;
}

	</style>
</head>
<body class="bi">
	
	<h3 class="bg-primary text-white text-center">FLIGHT SEARCH</h3>
	<form style="margin-left: 450px" method="post" action="">
	<fieldset style="width:430px;height:400px;background-color:rgba(0,0,0,0.3); margin-left: 20px; margin-top: 50px;">
			<legend><strong></strong></legend>	
		<table>
		<tr>
		<td>
		Departure:</td>
		<td><input list="dep" name="departure" class="form-control">
			<datalist id="dep">
				<option value="kannur">
				<option value="Trivandrum">
				<option value="Kozhikkodu">
				<option value="Chennai">
				<option value="Banglore">
			</datalist></td>
	</tr>
	<tr>
		<td>
		Arrival:</td>
		<td><input list="arri" name="arrival" class="form-control">
			<datalist id="arri">
				<option value="kannur">
				<option value="Trivandrum">
				<option value="Kozhikkodu">
				<option value="Chennai">
				<option value="Banglore">
			</datalist></td>
	</tr>
	<tr>
		<td>
		Date:</td>
		<td><input type="date" name="date" class="form-control"></td>
	</tr>
	<tr><td><input type="submit" name="sub" value="Search"></td></tr>
	
	</table>

</fieldset>

	</form>
	<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">


</body>
</html>