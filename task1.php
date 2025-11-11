<?php
    // 1. Create constants for app name and author
    define('APP_NAME', 'Expense Calculator');
    define('AUTHOR', 'Pervej Chowkider');

    // 2. Print them using echo, print, and printf
    echo APP_NAME . ", " . AUTHOR . "<br>";
    print(APP_NAME . ", " . AUTHOR . "<br>");
    printf("App name is: %s and Author is: %s <hr>", APP_NAME, AUTHOR);

    // 3. Create variables for food, transport, and other expenses
    $food = 255.4;
    $transport = 175.3;
    $other = 325.36;

    echo "Food: " . number_format($food, 2) . "<br> Transport: " . number_format($transport, 2) . "<br> Others: " . number_format($other, 2);

    // 4. Calculate total and average expense
    $total = $food + $transport + $other;
    $average = $total / 3;

    echo "<br>Total: " . number_format($total, 2) . "<br> Average: " . number_format($average, 2) . "<hr>";

    // 5. If total > 1000, show message
    echo ($total > 1000) ? "Budget Exceeded <br>" : "Within Budget <br>";

    // 6.1. Use Ternary for expense range message
    echo ($total < 300) ? "Low Expense<br>" : (($total <= 800) ? "Good Expense<br>" : "High Expense<br>");

    // 6.2. Use switch case for expense range message
    switch (true) {
        case ($total < 300):
            echo "Low Expense<hr>";
            break;
        case ($total <= 800):
            echo "Good Expense<hr>";
            break;
        default:
            echo "High Expense<hr>";
    }

    // 7. Function to calculate total expense
    function calculateExpense($item1, $item2, $item3) {
        return number_format($item1 + $item2 + $item3, 2);
    }
    echo "Total (from function): " . calculateExpense($food, $transport, $other) . "<br>";

    // 8. Function to check the budget and show the result
    function checkBudget($item1, $item2, $item3) {
        $totalExpense = $item1 + $item2 + $item3;
        $limit = 1000;

        if ($totalExpense > $limit) {
            return "Budget Exceeded by " . number_format(($totalExpense - $limit), 3) . " if budget is " . number_format($limit, 2);
        } else {
            return "Within Budget. Remaining: " . number_format(($limit - $totalExpense), 2) . " if budget is " . number_format($limit, 2);
        }
    }
    echo checkBudget($food, $transport, $other) . "<br>";
?>
