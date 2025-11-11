<?php
    // 1. Start a session and take user name and budget from a simple form 
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $_SESSION['name'] = $_POST['name'] ?? '';
        $_SESSION['budget'] = (float)($_POST['budget'] ?? 0);
    }

    // 3. Add a button to delete the session
    if(isset($_POST['delete'])){
        session_unset();
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1. Start a session and take user name and budget from a simple form  -->
    <form method="POST">
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="number" name="budget" id="budget" placeholder="Budget">
        <input type="submit">
    </form>

    <!-- 2. Store the data in session and show "Welcome, (name)! Your budget is (amount)." -->
    <div style="margin-top: 10px;">
        <?php
            if (isset($_SESSION['name']) && isset($_SESSION['budget'])) {
                echo "Welcome " . $_SESSION['name'] . "! Your budget is " . $_SESSION['budget'];
            } else {
                echo "No session data found.";
            }
        ?>
    </div>

    <!-- 3. Add a button to delete the session -->
    <div>
        <form method="POST">
            <button type="submit" name="delete">Delete Session</button>
        </form>
    </div>
    <hr>

    <!-- 4. Recursive function to sum array -->
     <div>
        <?php
            function recursive_sum(array $arr) {
                $sum = 0;
                foreach ($arr as $v) {
                    if (is_array($v)) {
                        $sum += recursive_sum($v);
                    } else {
                        $sum += $v;
                    }
                }
                return $sum;
            }

            $numbers = [100, [50, 25], 10, [5, [2, 3]]];

            echo "<pre>";
                print_r($numbers);
            echo "</pre>";

            echo "Sum: " . recursive_sum($numbers);
        ?>
    </div>
    <hr>

    <!-- 5. Create a function that applies a discount using a callback -->
     <div>
        <?php
            function discount($amount){
                return $amount - ($amount * 0.1);   // 10% discount
            }

            function apply_discount($prices, $discount){
                foreach($prices as $price){
                    echo "Before: " . $price . " => After discount: " . $discount($price) . "<br>"; 
                }
            }

            $amounts = [200, 150, 180];
            apply_discount($amounts, 'discount');
        ?>
     </div>
     <hr>

     <!-- 6. Write a function that divides two numbers and handle errors with try-catch-finally.  -->
      <div>
        <?php
            function divide($a, $b){
                try{
                    if($b == 0){
                        throw new Exception("Division by zero is not allowed.<br>");
                    } else {
                        $result = $a / $b;
                        echo "Result: " . $result . "<br>";
                    }
                } catch(Exception $error){
                    echo "Error: " . $error->getMessage();
                } finally {
                    echo "Division process is completed.<br>";
                }
            }
            divide(10, 2);
            divide(5, 0);
        ?>
      </div>

</body>
</html>
