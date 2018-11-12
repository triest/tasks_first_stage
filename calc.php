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
        <title>Калькулятор</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
     <div class="container">
        <div class="row">
            <br><br>
        <form action="#" method="post">
        	<label>Первое число:</label>
            <input type="number" name="first"> <br>
 			<label>Операция:</label>
            <input type="text" name="operation"><br>
             <label>Второе число:</label>
            <input type="number" name="second"><br>
            <input type="submit" name="SubmitButton">
        </form>
        <br>
        <?php echo "Ответ: " .$message; ?>
        </div>
    </div>
    </body>
    </html>