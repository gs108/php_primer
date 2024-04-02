<?php 
    $title = "PHP String Manipulation";
    include "includes/header.php"
?> 
        <h1><?php echo $title ?></h1>
        <?php
        // Concatenation of strings
            $phrase1 = "Student who came late";
            $phrase2 = "in class, stand with Rock";
            $name = "george schultz jr";   
            echo $phrase1 .", named Tiffany, ". $phrase2;
            echo "<br/>";
        
        // String transformation
            echo "Uppercase first letter: " . ucfirst($name)."<br/>";
            echo "Uppercase  letter of each word: " . ucwords($name)."<br/>";
            echo "All letters uppercase: " . strtoupper($name). "<br/>";
            echo "Lower case:". strtolower(" THIS WAS ALL UPPERCASE"). "<br/>";
            echo "<hr/>";
            echo "Repeat String: " . str_repeat("a",10) . "<br/>";
            echo "Repeat String:" . strtoupper(str_repeat(" a",10)) . "<br/>";
            echo "Get Substring: " . substr($name, 3, 5) . "<br/>";
            echo "Get Substring: " . strtoupper(substr($name, 3, 5)) .  "<br/>";
        ?>

<?php require "includes/footer.php"?>;