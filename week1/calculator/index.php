<!DOCTYPE html>
<html>
<head>
    <title>calculator</title>  
</head>
<body>
<div class="calc">
    <h2>simple calculator</h2>
    <form action="" method="post">
        <input type="text" name="number1" placeholder="enter the first number"><br>
        <input type="text" name="number2" placeholder="enter the second number"><br>
        <select name="calculation">
            <option value="add">addition (+)</option>
            <option value="subtract">subtraction (-)</option>
            <option value="multiply">multiplication (*)</option>
            <option value="divide">division (/)</option>
            <option value="modulus">modulus (%)</option>
        </select><br>
        <input type="submit" name="calculate" value="calculate">
    </form>

    <div class="output">
    <?php
    // $_POST is HTTP Post Method
    if ($_POST) {
        if ($_POST['number1'] && $_POST['number2'] && $_POST['calculation']) {
            // rondition that requires both input of both numbers
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $calculation = $_POST['calculation'];

            // on selection a switch case used according to the option selected
            switch ($calculation) {
                case "add":
                    $output = $number1 + $number2;
                    echo "equals: $output";
                    break;
                case "subtract":
                    $output = $number1 - $number2;
                    echo "equals: $output";
                    break;
                case "multiply":
                    $output = $number1 * $number2;
                    echo "equals: $output";
                    break;
                case "modulus":
                        $output = $number1 % $number2;
                        echo "equals: $output";
                        break;
                case "divide":
                    if ($number2 == 0) {
                        
                        echo "error! division by zero.";
                    } else {
                        $output = $number1 / $number2;
                        echo "equals: $number1 / $number2 = $output";
                    }
                    break;
                default:
                    echo "error";
            }
        } else {
            echo "fileds missing, fill them all.";
        }
    }
?>
    </div>
</div>

</body>
<footer>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .calc {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }
        form {
            text-align: center;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .output {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</footer>
</html>
