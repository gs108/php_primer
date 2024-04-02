<?php 
    $title = "Date and Sting Manipulation";
    include "includes/header.php"
?>
  <h1><?php echo $title ?></h1>
  <?php
  $datenow = getdate();
  echo "Today's Date: <br/>"; 
  echo $datenow["mday"] . "<br/>";
  echo $datenow["mon"] . "<br/>";
  echo $datenow["year"] . "<br/>";

  echo "Today's Date: " . $datenow["mday"] . "/" . $datenow["mon"] . "/" . $datenow["year"] .  "<br/>";
  // Unix timestamp
   echo time() . "<br/>";

    //    Print can also be used as echo
    print date("m/d/y G.i:s<br>", time()) . "<br/>";
    print "Today is ";
    print date("j of F Y, \a\\t g.i.a", time());

  ?>
<?php require "includes/footer.php"?>;