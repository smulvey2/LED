<?php
            $_name = implode("|", ['name']);
            $_phone = implode("|", ['phone']);
            $_email = implode("|", ['email']);
            $_subject = implode("|", ['subject']);
            $_address = implode("|", ['address']);
            $_message = implode("|", ['message']);

                $to = "themulvs43@gmail.com"; $email_subject = "Contact form submission: $_subject"; $email_body = "You have received a new message. ". " Here are the details:\n Name: $_name \n ". "Email: $_email\n Phone: $_phone\n Message \n $_message"; $headers = "From: $_email\n"; $headers .=
                "Reply-To: $_email"; mail($to,$email_subject,$email_body,$headers); //redirect to the 'thank you' page header('Location: contact-form-thank-you.html');
            ?>