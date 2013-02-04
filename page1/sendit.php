<?php
$visitorname = $_POST['visitorname'];
$visitormail = $_POST['visitormail'];
$visitorcell = $_POST['visitorcell'];
$visitorphone = $_POST['visitorphone'];
$subject = $_POST['subject'];
$drdlist = $_POST['drdlist'];
$msgs = $_POST['msgs'];

// Set up parameters - your email
$to = "mi_lif@netvision.net.il";
$subject = "Form details Carmi";
$message = "
<table>
    <tr>
      <th>פרטים שהתקבלו מטופס צור קשר</th>
    </tr>
    <tr>
      <td>$visitorname\n</td><td>:שם</td>
    </tr>
    <tr>
      <td>($visitormail)\n</td><td>:אימייל</td>
    </tr>
    <tr>
      <td>$visitorcell\n</td><td>:סלולרי</td>
    </tr>
    <tr>
      <td>$visitorphone\n</td><td>:טלפון נוסף</td>
    </tr>
    <tr>
      <td>$subject\n</td><td>:נושא</td>
    </tr>
    <tr>
      <td>$msgs \n</td><td>:תוכן</td>
    </tr>
  </table>

";
$from = "info@carmi-law.co.il";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $from" . "\r\n";

// Send email
mail($to,$subject,$message,$headers);


?>

<script language="javascript"> window.location = "thank-you.html"; </script>