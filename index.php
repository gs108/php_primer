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
<button type="button" class="btn btn-dark">Submit</button>
<button type="button" class="btn btn-success">Submit</button>
<a href="https://www.heroku.com" target="_blank" class="btn btn-secondary">Heroku.com</a>
    
</a>
<?php 
    require "includes/footer.php";
?>