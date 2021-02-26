

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
color: rgba(0,0,0,0.7);
font-size: 50px;
}



</style>

</head>
<body>
<h1>AIRPORT DETAILS</h1>

<form style="margin-left: 430px" method="post" action="<?php echo base_url()?>main/airportinsert">
<fieldset style="width:500px;height:500px;">
<legend><strong></strong></legend>
<table>
<tr>
<td>
Airport name:</td>
<td><input type="text" name="aname" required="required" maxlength="35" pattern="[a-zA-Z]+"></td>
</tr>

<tr>
<td>
Country:</td>
<td><input list="Country" name="cntry" required="required">
<datalist id="Country">
<option value="India">
<option value="America">
<option value="Australia">
<option value="China">
<option value="Brazil">
</datalist></td>
</tr>

<tr><td>State:</td>
<td><input type="text" name="state" required="required" maxlength="25" pattern="[a-zA-Z]+"></td></tr>
<tr><td>Contact number:</td>
<td><input type="text" name="contact" required="required" pattern="[7-9]{1}[0-9]{9}"></td></tr>
<tr><td>Location:</td>
<td><input type="text" name="loc" required="required" maxlength="25" pattern="[a-zA-Z]+"></td></tr>
<tr><td><input type="submit" name="sub" value="Submit"></td></tr>



</table>
</fieldset>


</form>
</body>
</html>