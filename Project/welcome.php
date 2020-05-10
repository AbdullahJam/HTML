<html>
    <body>

        <?php
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        if ($name == "g181210558@sakarya.edu.tr" && $pass == "12345" ) {
          echo "Wolcome g181210558";
        }
        else {
            header("Location: Login.php"); 
            exit();
        } 
        ?>
        
    </body>
</html>