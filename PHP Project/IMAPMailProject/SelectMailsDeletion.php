<?php include 'directives/header.php'; ?>
<?php include 'directives/container.php'; ?>
<?php
    set_time_limit(0);
    session_start();
    $username = $_SESSION['username'];
    $password = $_SESSION['password']; 
?>

<?php
 if (! function_exists('imap_open')) {
        echo "IMAP is not configured.";
        exit();
    } else {
  $connection = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', $username, $password) or die('Cannot connect to Gmail: ' . imap_last_error());
  $emailData = imap_search($connection,'All');
  if (! empty($emailData)) {
      foreach ($emailData as $emailIdent) {
      $overview = imap_fetch_overview($connection, $emailIdent, 0);
      $fromaddr[$emailIdent] = $overview[0]->from;
    }
  }
}
?>

<!-- using https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox -->

<!-- common libraries -->
<div id="listData">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="lib/jquery-3.2.1.slim.min.js"></script>
<script src="lib/bootstrap.min.js"></script>

<!-- plugin -->
<script src="lib/jquery.bootstrap-duallistbox.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap-duallistbox.css">

<!-- Demo -->
<div class="container">
  <div class="row" style="margin-top: 0px;">
    <div class="col">
      <br><br>
      <h2> Deleting Mails from your Inbox </h2>
      <p><strong>Deletion Process:</strong> Select all the common unwanted From list group in your INBOX for deletion</p>
      <hr/>
    </div>
  </div>
  <div class="row" style="margin-bottom: 40px;">
    <div class="col">
      <form id="deleteform" method="post" action="delete.php">
        <select multiple="multiple" size="10" name="from[]" title="from[]" style="height: 222px; width: 546px;">
            <?php for ($x = 1; $x <= sizeof($fromaddr); $x++): ?>
              <option value='<?php echo $fromaddr[$x]; ?>'> 
                <?php echo $fromaddr[$x]; ?>
              </option>
            <?php endfor; ?>
       </select>
        <br>
        <div class="row">
          <div class="col-md-6 offset-md-6">
            <button type="submit" name="submit" value="Submit" class="btn btn-primary w-100">Delete</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

<script>
  var demo1 = $('select[name="from[]"]').bootstrapDualListbox({
    nonSelectedListLabel: 'Available From list group in your INBOX',
    selectedListLabel: 'Commonly selected From list address ready for Deletion',
    preserveSelectionOnMove: 'moved',
    moveAllLabel: 'Move all',
    removeAllLabel: 'Remove all'
  });
  
</script>

</div>
</div>