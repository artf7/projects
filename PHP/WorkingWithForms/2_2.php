<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignemnt 2.2</title>
</head>
<body>
   
    <form>

        <label for="pizza-sizes">Choose a pizza size:</label> 
            <select name="pizza-sizes" id="pizza-sizes"> 
                <option value="small">small</option> 
                <option value="medium">medium</option> 
                <option value="large">large</option> 
                <option value="extra-large">extra large</option> 
            </select><br>

            <label for="pizza-toppings">Choose topping(s):</label> <br>
                <input type="checkbox" id="topping" name="topping1" value="pepperoni">
            <label for="topping1">pepperoni</label><br>
                <input type="checkbox" id="topping" name="topping2" value="cheese">
            <label for="topping2">cheese</label><br>
                <input type="checkbox" id="topping" name="topping3" value="olive">
            <label for="topping3">olive</label><br>
                <input type="checkbox" id="topping" name="topping4" value="pineapple">
            <label for="topping4">pineapple</label><br>
                <input type="checkbox" id="topping" name="topping5" value="ham">
            <label for="topping5">ham</label><br>
        <input type="submit" value="submit">
    
    </form>

    <?php
    //checks if pizza is checked
    if (isset($_GET["pizza-sizes"])){
        $pizzaSize = $_GET["pizza-sizes"];
        $pizzaToppings = $_GET["topping"];
        $totalPrice = 0.0;
        //clalculates total price according to size of pizza
        switch($pizzaSize){
            case "small":
                $totalPrice = 9.00;
                break;
            case "medium":
                $totalPrice = 12.50;
                break;
            case "large": 
                $totalPrice = 15.00;
                break;
            case "extra-large":
                $totalPrice = 17.50;
                break;
            default:
                echo "<p style='color:red'> You didn't choose a pizza size</p>";    
        }
        
        //add price of toppings to pizza price
        $toppings = "";
        //going through each topping
        for ($i = 1; $i <= 5; $i++) {
            //getting toppingKey to adding to topping a number in range between 1 and 5 
            $toppingKey = "topping" . $i;
            //checking if any topping checked (else assign a "None" value)
            if (isset($_GET[$toppingKey])) {
                //$topping now get element from one of 5 toppings 
                $topping = $_GET[$toppingKey];
                //string concatination and adding toppings with ',' separation
                $toppings .= ucfirst($topping) . ", ";
                //checking if topping not a cheese, and if not then adding $1.00 to total price
                if ($topping !== "cheese") {
                    $totalPrice += 1.00;
                }
            }
            else{
                $toppings = "None";
            }
        }

        // Remove trailing comma and space from toppings
        $toppings = rtrim($toppings, ", ");

        // Display the order details
        echo "<p>Size: $pizzaSize</p>";
        echo "<p>Toppings: $toppings</p>";
        echo "<p>Total Cost: $" . number_format($totalPrice, 2) . "</p>";
    }
    ?>
</body>
</html>