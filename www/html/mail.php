<?php

//contact mail 
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$quant = $_POST['quant'][1];
 
//$to=$admin_mailid;
$to="anilpual@gmail.com";
$to1="info@kitchenresa.com";
$from=$email;
$headers = "From:" . $from."\r\n" .
	'MIME-Version: 1.0' . "\r\n".
	'Content-type: text/html; charset=iso-8859-1' . "\r\n".
	'X-Mailer: PHP/' . phpversion();
$subject="Enquiry";
$body="<html>
	<body><p><b><font:color=blue>Dear Kitchensera,</font></b></p>
<p>You have an Enquiry,Please find the details below</p>
</br></br>
		<table border='1' width='200' cellspacing='2' cellpadding='2' style='border-collapse:collapse;'>

  			<tr>
    				<th>Name</th><th>".$name."</th>
			
			</tr><tr>		
    				<th>Email</th><th>".$email."</th>
			</tr><tr>				
    			    <th>Phone</th><th>".$phone."</th>
   	  	    	  </tr>
			 <tr>	
    			    <th>Quantity</th><th>".$quant."</th>
   	  	    	   
			 </tr>			 
		</table>
		</br></br><P>Thank You...<p>
	</body>
	</html>";
	

// send email
mail("anilpual@gmail.com","Enquiry",$body,$headers);
$m =     mail("info@kitchenresa.com","Enquiry",$body,$headers);
	

if($m){
echo "<script>
//confirm('Msg sent');
//window.location.href='contacts.html';
</script>";
}
else
echo "<script>
//confirm('Msg not sent');
//window.location.href='contacts.html';
</script>";
	

?>