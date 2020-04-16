<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//var_dump($_POST);
//inputFirstName
//inputLastName
//inputEmailAddress
//inputContact
//inputMessage
      //  $id_product = $_POST["id_product"]; 
        $inputFirstName = $_POST["inputFirstName"]; 
        $inputLastName = $_POST["inputLastName"]; 
        $inputEmailAddress= $_POST["inputEmailAddress"];  
        $inputContact= $_POST["inputContact"]; 
        $inputMessage= $_POST["inputMessage"];  
        $created_at= date("Y-m-d h:i:sa"); 
include "DB_config.php";
$mysqli = mysqli_connect($HostName,$UserName,$Password,$DatabaseName);

    $stmt = $mysqli->prepare("INSERT INTO contactform (id_product, inputFirstName, inputLastName, inputEmailAddress, inputContact, inputMessage, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssss", $id, $inputFirstName, $inputLastName, $inputEmailAddress, $inputContact,$inputMessage,$created_at);
    $result=$stmt->execute();
    if (!$result) {
                    throw new Exception($mysqli->error);
                    
                $message_user = "Your contact information is saved successfully.";
                $to_user = $inputEmailAddress;
                $subject_user = "You enquiry received successfully. Our support team will get back to you soon";
                $html_emailcontent .='<html>';
                $html_emailcontent .='<head></head>';
                $html_emailcontent .='<body style="margin: 0; padding: 0; font-size: 100%; font-family: Helvetica, Helvetica, Arial, sans-serif; line-height: 1.65;">';
                $html_emailcontent .='<center>';
                $html_emailcontent .='    <table class="body-wrap" tyle="width: 100% !important; height: 100%; background: #f8f8f8;">';
                $html_emailcontent .='    <tr>';
                $html_emailcontent .='        <td class="container" style="display: block !important; clear: both !important; margin: 0 auto !important; max-width: 670px !important;">';
                $html_emailcontent .='            <table style="width: 100% !important; border-collapse: collapse; ">';
                $html_emailcontent .='                <tr>';
                $html_emailcontent .='                    <td align="left" class="masthead" style="background: white; padding: 30px 35px;">';
                $html_emailcontent .='                            <img src="http://haushivachak.in/assets_bk/contact_form_test/img/download.png" height="" width="200"  style="max-width: 100%;  display: block;"/>';
                $html_emailcontent .='                    <hr class="" style="border-top:#888;">';
                $html_emailcontent .='                    </td>';
                $html_emailcontent .='                </tr>';
                $html_emailcontent .='                <tr>';
                $html_emailcontent .='                    <td class="content" style="background: white; padding: 30px 35px;">';
                $html_emailcontent .='                        <h3>Hello User,</h3>';
                $html_emailcontent .='                        <p>Greetings from Example.</p>';
                $html_emailcontent .='                       <table style="width: 100% !important; border-collapse: collapse; ">';
                $html_emailcontent .='                            <tr>';
                $html_emailcontent .='                         <p> Thank you for registered your details with us. We will get back to you in next 24hrs regarding this. If you want more information kindly visit our website www.example.com for detailed information on these.</p>';
                $html_emailcontent .='                                <td align="center">';
                $html_emailcontent .='                                    <p>';
                $html_emailcontent .='                                    </p>';
                $html_emailcontent .='                                </td>';
                $html_emailcontent .='                            </tr>';
                $html_emailcontent .='                        </table>';
                $html_emailcontent .='                         <p>You can refer to the FAQs (Frequently Asked Questions) section on the Example Kart Home Page that covers the various possible scenarios related to the issuance.</p>';
                $html_emailcontent .='                         <p>For any clarification, you may contact our Toll Free Number: 1800-212-0508, which is available 24X7 assisting in 3 languages English, Hindi, Marathi.</p>';
                $html_emailcontent .='                        <p>Customer Service Team.</p>';
                $html_emailcontent .='<br>';
                $html_emailcontent .='<p><b>Best regards,</b></p>';
                $html_emailcontent .='<p>Example Team</p>';
                $html_emailcontent .='<p><a href="#">www.example.com</a></p>';
                $html_emailcontent .='                     </td>';
                $html_emailcontent .='                </tr>';
                $html_emailcontent .='            </table>';
                $html_emailcontent .='        </td>';
                $html_emailcontent .='    </tr>';
                $html_emailcontent .='    <tr>';
                $html_emailcontent .='        <td class="container" style="display: block !important; clear: both !important; margin: 0 auto !important; max-width: 670px !important;">';
                $html_emailcontent .='    <table>';
                $html_emailcontent .='               <tr>';
                $html_emailcontent .='                    <td class="content footer" align="center" style="text-align:left;padding-left: 30px;pading-right:30px;" >';
                $html_emailcontent .='                        <p style=" margin-bottom: 0; color: #888; font-size: 12px;">Note: This is a system generated e-mail, please do not reply to it.<p>';
                $html_emailcontent .='                        <p style=" margin-bottom: 0; color: #888; font-size: 12px;">*** This message is intended only for the person or entity to which it is addressed and may contain confidential and/or privileged information. If you have received this message in error, please notify the sender immediately and delete this message from your system ***<p>';
                $html_emailcontent .='                      <hr style="border-top:1px solid #F8F5F5;">';
                $html_emailcontent .='                    </td>';
                $html_emailcontent .='               </tr>';
                $html_emailcontent .='               <tr>';
                $html_emailcontent .='                    <td class="content footer" align="center" style="padding-left: 30px;pading-right:30px;" >';
                $html_emailcontent .='                        <p style=" margin-bottom: 0; color: #888; text-align: center; font-size: 12px;">Sent by <a href="https://example.com" style="color: #e7a424; text-decoration: none;">Example  </a>Office No-000 ,';
                $html_emailcontent .='                        Floor no 0, Sample address, City , Starte - Pincode.</p>';
                $html_emailcontent .='                        <p style=" margin-bottom: 0; color: #888; text-align: center; font-size: 12px; "><a style="color: #e7a424; text-decoration: none;" href="mailto:">info@example.com</a></p>';
                $html_emailcontent .='                    </td>';
                $html_emailcontent .='                </tr>';
                $html_emailcontent .='            </table>';
                $html_emailcontent .='</td>';
                $html_emailcontent .='    </tr>';
                $html_emailcontent .='</table>';
                $html_emailcontent .='</center>';
                $html_emailcontent .='</body>';
                $html_emailcontent .='</html>';
                        
				$headers_user = "MIME-Version: 1.0" . "\r\n";
				$headers_user .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			   
				$headers_user .= 'From: info@haushivachak.in' . "\r\n";
			  
				if(mail($to_user,$subject_user,$html_emailcontent,$headers_user)):
					echo	$successMsg = 'Email has sent successfully.';
					else:
					echo	$errorMsg = 'Email sending fail.';
					endif;
	
                    
    }
    else
    {
            echo 'Contact saved successfully';
    }
                                        
