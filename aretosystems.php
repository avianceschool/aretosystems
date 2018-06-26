<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>aretosystems</title>
</head>

<body>


 <div align="center">
 



 
<table>

<form name="check" action="https://pay.aretosystems.com/pay-card-d.ashx" method="post">
<input type="hidden" name="id" value="agMeSuZ31fg+imAMvSSoMUidyem0+BkeL4g1cBhs8biYUu9gPZigMV1mO2D6tWlW">
<input type="hidden" name="Session" value="BYqKLw70vSvMoJgI0uwuANJ+41rp0OdNLX8N42k4Bw1rjrrqaL81WxIKa034Ic2/">
<input type="hidden" name="CommonCode" value="">

<tr>
<td>Order Id</td>
<td> <input type="text" name="OrderId" value="<?php echo "ORD".rand(9,9999999999);?>"></td>
</tr>

<tr>
<td>Amount</td>
<td> <input type="text" name="Amount" value="99.00"></td>
</tr>

<tr>
<td>Currency Code</td>
<td> <input type="text" name="CurrencyCode" value="USD"> </td>
</tr>

 

<tr>
<td>Card Type</td>
<td> <select name="CCType">
<option value="MC">MC (Mastercard)</option>
<option value="VISA">VISA (Visa)</option>
<option value="AMEX">AMEX (American Express)</option>
</select></td>
</tr>

<tr>
<td>Card Number</td>
<td> <input type="text" name="CCNumber" value="4200000000000000"> </td>
</tr>
<tr>
<td>Card holder Name</td>
<td> <input type="text" name="CCName" value="test"> </td>
</tr>
<tr>
<td>Card holder surname</td>
<td> <input type="text" name="CCSurname" value="test"> </td>
</tr>



<tr>
<td>Card Expiry Month</td>
<td> <select name="CCExpiryMonth">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select> </td>
</tr>
<tr>
<td>Card Expiry Year</td>
<td> 

<select name="CCExpiryYear">
<option value="2015">2015</option>
<option value="2016">2016</option>
<option selected="selected" value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
</select> </td>
</tr>

<tr>
<td>CCV</td>
<td> <input type="text" name="CCVC" value="123"> </td>
</tr>

<tr>
<td>Address</td>
<td> <input type="text" name="CCAddress" value="kolkata"> </td>
</tr>
<tr>
<td>City</td>
<td> <input type="text" name="ClientCity" value="kolkata"> </td>
</tr>
<tr>
<td>Country Code [2 digits]</td>
<td> <input type="text" name="ClientCountryCode" max="2" value="IN"> <br/></td>
</tr>
<tr>
<td>Zip</td>
<td> <input type="text" name="ClientZip" value="675432"> </td>
</tr>
<tr>
<td>Email</td>
<td> <input type="text" name="ClientEmail" value="bikash@cleonix.com"> </td>
</tr>
<tr>
<td>External Identifier</td>
<td>  <input type="text" name="ClientExternalIdentifier" value="<?php echo "AT".time();?>"> </td>
</tr>

<tr>
<td> </td>
<td>  
<input type="submit" name="submit" value="SUBMIT"></td>
</tr>
</form>
</table>
 
 
 </div>



	
</body>
</html>