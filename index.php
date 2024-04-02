<?php 
    $title = "HTML - PHP Primer";
    include "includes/header.php"
?>
<h1><?php echo $title ?></h1>

  <?php 
  // Printing to HTML using echo
    echo "Hello PHP!";
    echo "<br ?>";
    echo "Second Line";
    echo "<br ?>";

  //declare variable
    $name = "George Schultz";
    $age = 68;
  //echo variable
    echo $name;
    echo "<h1>My Name Is: $name</h1>";
    echo "<h1>My Age Is: $age</h1>";
?>

<button type="button" class="btn btn-primary">Submit</button>

<?php 
    require "includes/footer.php";
?>