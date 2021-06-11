    <?php 
        $title = "Index";
        include 'includes/header.php' 
        
    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML - Php_Primer</h1>
    <br/>
    <?php 
        // Printing to HTML using echo

        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';

    
                $name = 'Chirontan Bhuyan';
                $age = 20;
                //echo variable , here name is the varible 
                echo '<br/>';
                echo $name;

                echo '<h1>My Name is: '.$name.'</h1>';
                echo '<h1>My age is: '.$age.'</h1>';

                echo "<h1>My Name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>

    <?php

     require 'includes/footer.php' 
     ?>