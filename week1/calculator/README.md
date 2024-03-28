## Simple php Calculator

HTML Code
```sh
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
    </div>

```
PHP Code

```php
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
```