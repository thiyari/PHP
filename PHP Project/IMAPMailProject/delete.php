<?php
set_time_limit(0);
session_start();
    $username = $_SESSION['username'];
    $password = $_SESSION['password']; 
    $hostname = '{imap.gmail.com:993/imap/ssl}INBOX';

    if (! function_exists('imap_open')) {
        echo "IMAP is not configured.";
        exit();
    } else {

    $from = $_POST['from'];
    foreach ($from as $fromaddr):

    $email = mailparse_rfc822_parse_addresses($fromaddr);
    $from = $email[0]['display'];

    // try to connect
    $inbox = imap_open($hostname,$username,$password) or die('Cannot download information: ' . imap_last_error());
    
    $emailData = imap_search($inbox,'FROM "'.$from.'"');

    // if any emails found, iterate through each email
    if(!empty($emailData))
        {

            // put the newest emails on top
            rsort($emailData);


            // for every email...
            foreach($emailData as $email_number) 
                {
                    // TESTING BOTH METHODS
                    //To delete the mails
                    imap_delete($inbox,$email_number);

                    //To send mails to trash
                    //imap_mail_move($inbox, $email_number,'[Gmail]/Trash');
                }
        } 
    // close the connection
        
    imap_expunge($inbox);
    imap_close($inbox,CL_EXPUNGE);
    endforeach;
    } 
    header('Location:SelectMailsDeletion.php');
?>