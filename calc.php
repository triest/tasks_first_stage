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
        if($operation!=='+' and $operation!=='-' and $operation!=='*' and $operation!=='/'){
        	$message="Не верная операция";
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
        	<label>Первое число:</label>
            <input type="number" name="first"> <br>
 			<label>Операция:</label>
            <input type="text" name="operation"><br>
             <label>Второе число:</label>
            <input type="number" name="second"><br>
            <input type="submit" name="SubmitButton">
        </form>
        <?php echo "Ответ " .$message; ?>

    </body>
    </html>