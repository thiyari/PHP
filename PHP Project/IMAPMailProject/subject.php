<?php include 'directives/header.php'; ?>
<?php include 'directives/container.php'; ?>

<div id="listData">
<h1>Fetching Your Search Mails</h1>
<?php
session_start();
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $subject = $_SESSION['subject']; 
    ?>
<?php
    if (! function_exists('imap_open')) {
        echo "IMAP is not configured.";
        exit();
    } else {
        ?>

    <?php
        
        /* Connecting Gmail server with IMAP */
        $connection = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', $username, $password) or die('Cannot connect to Gmail: ' . imap_last_error());
        
        /* Search Emails having the specified keyword in the email subject */
        $emailData = imap_search($connection, 'SUBJECT "'.$subject.'"');
        
        if (! empty($emailData)) {
            ?>
    <table class="table table-light table-hover">
        <thead>
        <tr>
            <th>Address</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        </thead>
        <?php
            foreach ($emailData as $emailIdent) {
                
                $overview = imap_fetch_overview($connection, $emailIdent, 0);
                $message = imap_fetchbody($connection, $emailIdent,1);
                $messageExcerpt = substr($message, 0, 150);
                $partialMessage = trim(quoted_printable_decode($messageExcerpt)); 
                $date = date("d F, Y", strtotime($overview[0]->date));
                ?>
        <tbody>
        <tr>
            <td class="content-div" width="20%">
                <span class="column">
                    <?php echo $overview[0]->from; ?>
            </span>
            </td>
            <td class="content-div" width="70%">
                <span class="column">
                    <?php echo $overview[0]->subject; ?> - <?php echo $partialMessage; ?>
                </span>
            </td>
            <td class="content-div" width="10%">
                <span class="date">
                    <?php echo $date; ?>
                </span>
            </td>
        </tr>
        <?php
            } // End foreach
            ?>
        </tbody>
    </table>
    <?php
        } // end if
        
        imap_close($connection);
    }
    ?>
</div>