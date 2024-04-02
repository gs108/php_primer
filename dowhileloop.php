<?php 
    $title = "While Loop";
    include "includes/header.php"
?>
  <h1><?php echo $title ?></h1>
    <?php
      $grade = 0;
      // Infinite Loop
        while($grade < 10) {
          echo "<p> I am less than 10! </p>";
          $grade++;
        }
        echo "EXIT LOOP"
    ?>
    <h1>DO-WHILE LOOP</h1>
    <?php
      do {
        echo "<p>I AM DO WHILE LOOP</p>";
        $grade++;
      }while($grade < 10);
      echo "EXIT LOOP";
      
    ?>
<?php require "includes/footer.php"?>;