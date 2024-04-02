<?php 
    $title = "Switch Statements";
    include "includes/header.php"
?>
  <h1><?php echo $title ?></h1>
  <?php
  $grade = "A";

  switch($grade) {
    case "A":
      echo "<p class='star'>YOU ARE A SUPERSTAR</p>";
      break;
    
    case "B":
      echo "<p class='pass'> YOU DID WELL</p>";
      break;

      default:
        echo "<p class='fail'> YOU FAILED...</p>";
        break;
  }
  ?>
<?php require "includes/footer.php"?>;