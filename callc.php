<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

    <h1>Calculator</h1>
    <form action="callc.php" method ="post">
        <input type="number" name="num1">
        <input type="numer" name="num2">
        <select name="operator" id="">
               <option>Clear</option>
               <option>Add</option>
               <option>Substract</option>
               <option>Multiply</option>
               <option>Divide</option>
        </select>
        <input type="submit" value="Calculate">
        
    </form>
    <?php 
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $result = " ";
        $operator = $_POST["operator"];
            if(isset($num1) and isset($num2))
            {
                switch ($operator) {
                    case 'Add':
                            (int)$result = $num1 + $num2;
                            //echo $result;
                        break;
                    case 'Substract':
                            (int)$result = $num1 - $num2;
                            //echo $result;
                        break;
                    case 'Multiply':
                            (int)$result = $num1 * $num2;
                            //echo $result;
                        break;
                    case 'Divide':
                        if($num2 == 0){
                            $result = "Error";
                        }else{
                            (int)$result = $num1 / $num2;
                            //echo $result;
                        }
                            
                        break; 
                }
            }
        
    ?>
    <h3>Result = <?php echo $result ?></h3>
</body>
</html>