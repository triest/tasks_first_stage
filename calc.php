<?php
    if(isset($_POST['SubmitButton'])){
        $first = $_POST["first"];
        $second = $_POST["second"];
        $operation=$_POST["operation"];

        if($operation==='+'){
        	$message=$first+$second;
        }
        if($operation==='-'){
        	$message=$first-$second;
        }
        if($operation==='*'){
        	$message=$first*$second;
        }
        if($operation==='/'){
        	$message=$first/$second;
        }
    }

        ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="#" method="post">
            <input type="number" name="first"> <br>
            <input type="text" name="operation"><br>
            <input type="number" name="second"><br>
            <input type="submit" name="SubmitButton">
        </form>
        <?php echo "The Answer is " .$message; ?>

    </body>
    </html>