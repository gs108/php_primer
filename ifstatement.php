<?php 
    $title = "If or Else Statements";
    include "includes/header.php"
?>
    <h2><?php echo $title ?></h2>

  <?php
    // Variable $grade
    $grade = 80;
    // An If statement that will carry out an action based on the value of the variable.
    if($grade >= 50){
      echo "<p class='pass'> YOU HAVE PASSED</p>";
    }
    else{
      echo "<p class='fail'> YOU HAVE FAILED</p>";
    }
    // In the next example this variable $grade changes to letters because php will change because it is sequentially after.
    $grade = "B";
    // If-Else If-Else
    if($grade == "A"){
      echo '<p class="star">YOU ARE A SUPERSTAR!</p>';
    }
    elseif ($grade == "B"){
      echo "<p class='well'>YOU DID WELL!</P>";
    }
    else {
      echo "<p class='fail'>YOU HAVE FAILED...</p>";
    }
  ?>
<?php require "includes/footer.php"?>;