<?php 
    $path = './';
    $page = 'Order Receipt';
    include $path.'assets/inc/header.php';
?>

    <h2>Your Pizza Order</h2>
    <!-- get user's data -->
<?php 
    //              ['name']
    $cName = $_POST['customerName']; 
    $cID = $_POST['customerID']; //id used for demonstration purposes
    $pizzaSize = $_POST['pizzaSize'];
    $toppings = $_POST['toppings'];

    // validate the customer ID for numerics 
    if(empty($cID))
    {
        // if ID is empty force the browser to go back to the page, but this time we will append the name to the URL
        header('Location: orderform.php?name='.$_POST['customerName']);
    }
    else //has value in id field
    {
        if(!is_numeric($cID)) //not valid id
        {
            //the echoes could be 1  line, here we are appending strings (with .) for readablilty of code
            echo '<p>Customer ID '. $cID .
            ' is not a valid ID because it contains' . 
            ' a non-numeric character.</p>';
            // we are using a hidden input to send the name back
            echo '<p><form action="orderform.php">' .
            '<input type="hidden" name="name" value="'. $cName . 
            '"/><input type="submit" value="ok"/></form></p>';
            // doesn't keep the same selected option for pizza sizes 
        }
        else  //valid id 
        {
            // pizza size
            // echo "we should be good!";
            switch($pizzaSize) {
                case 'P':
                    $pizzaCost = 7.99;
                    $pizzaType = "Personal";
                    break;
                case 'S':
                    $pizzaCost = 10.99;
                    $pizzaType = "Small";
                    break;
                case 'M':
                    $pizzaCost = 13.99;
                    $pizzaType = "Mediium";
                    break;
                case 'L':
                    $pizzaCost = 16.99;
                    $pizzaType = "Large";
                    break;
                default:
                    $pizzaCost = 13.99;
                    $pizzaType = "Mediium";
            }

            //pizza toppings
            switch($toppings)
            {
                case '0':
                    $toppingsCost = 0;
                    $toppingsType = "No Extra Toppings";
                    break;
                case '1':
                    $toppingsCost = 2;
                    $toppingsType = "One Topping";
                    break;
                case '2':
                    $toppingsCost = 3;
                    $toppingsType = "Two Toppings";
                    break;
                case '3':
                    $toppingsCost = 3.75;
                    $toppingsType = "Three Toppings";
                    break;
                default: 
                    $toppingsCost = 0;
                    $toppingsType = "No Extra Toppings";
            }

            //calculate tax
            $totalNoTax = $pizzaCost + $toppingsCost;
            $taxAmount = $totalNoTax * 0.08;
            $totalCost = $totalNoTax+ $taxAmount;

            //print the receipt
            //numfmt_create() lets us switch from one currency to another
            $fmt = numfmt_create('en_US', NumberFormatter::CURRENCY); //de_DE for german Euros
            //we end the PHP here to show that we can and when we go back to the PHP - we are still in the if statement
        ?>
            <div id='receipt'>
            <br/> Your Delicious Pizza Order!!
            <br/>
            <br/>Pizza Price:
        <?php
          //echo money_format('%(#6n', $pizzaCost);
            echo numfmt_format_currency($fmt, $pizzaCost, "USD");
        ?>
            <br/>Topping Price:
        <?php
            echo numfmt_format_currency($fmt, $toppingsCost, "USD");
            echo "<br>Tax Amount: " . numfmt_format_currency($fmt, $taxAmount, "USD");
            echo "<br>Total Cost of your order is: " . numfmt_format_currency($fmt, $totalCost, "USD");
            echo ($cName == ''? '.': ", $cName.");
            echo "</div>";
        }
    }
?>

<?php 
    include $path.'assets/inc/footer.php';
?>