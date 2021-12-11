<?php 
                $emps = json_decode($_POST['emps'],true);
                print_r($emps);
                foreach( $emps as $emp){
                    $to_email = $emp['email'];
                    $subject = "Simple Email Test via PHP";
                    $body = "Hi, This is secret links"." " . $emp['link'];
                    $headers = "From: iondigitalmarkerhub@gmail.com";
                    print_r( $emp['email']);
                    print_r($body);
                    // if (mail($to_email, $subject, $body, $headers)) {
                    //     echo "Email successfully sent to $to_email...";
                    // } else {
                    //     echo "Email sending failed...";
                    // }
            }
               
                ?>