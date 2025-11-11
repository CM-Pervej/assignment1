<?php
    // 1. Create an array with categories and expenses 
    $categories = [
        "Food" => 250.4,
        "Cloths" => 125.65,
        "Home" => 150.00,
        "Course" => 200.05
    ];

    echo "<br><b>The Array is: </b><br><br>";
    foreach($categories as $category => $expense){
        echo $category . " => " . $expense . "<br>";
    }

    // 2. Use array function like push, pop, merge, and sum.
    // push 
    echo "<hr><b>After array_push()</b><br><br>";
    echo array_push($categories, 40) . "<br>";

    foreach($categories as $category => $expense){
        echo $category . " => " . $expense . "<br>";
    }

    // pop 
    echo "<hr><b>After array_pop()</b><br><br>";
    echo array_pop($categories) . "<br>";

    foreach($categories as $category => $expense){
        echo $category . " => " . $expense . "<br>";
    }

    // merge 
    echo "<hr><b>New Array</b> <br><br>";
    $extra_categories = [
        "Entertainment" => 250.4,
        "Tour" => 125.65
    ];

    foreach($extra_categories as $category => $expense){
        echo $category . " => " . $expense . "<br>";
    }

    echo "<br><b>Merged Array</b> <br><br>";
    $merge = array_merge($categories, $extra_categories);

    foreach($merge as $category => $expense){
        echo $category . " => " . $expense . "<br>";
    }

    // sum 
    echo "<hr><b>Array sum</b> <br><br>";
    echo "Total: " . array_sum($merge);

    // 3. Convert a string of expenses to array (explode) and back to string (implode)
    $expense = "100, 120, 140, 200, 250";
    echo "<hr><b>Original String is: </b>" . $expense;

    echo "<br><b>After explode: </b>";
    $explode = explode(",", $expense);
    echo "<pre>";
        print_r($explode);
    echo "</pre>";

    echo "<br><b>After implode: </b>";
    $implode = implode(",", $explode);
    print_r($implode);

    // 4. Use string functions like strtoupper, strlen, substr, and str_replace 
    $text = "Hello friends, How are you? How is your father?";
    echo "<hr><b>Original String: </b>" . $text;
    echo "<br><b>Upper case: </b>" . strtoupper($text);
    echo "<br><b>Length: </b>" . strlen($text);
    echo "<br><b>Substring(0, 7): </b>" . substr($text, 0, 7);
    echo "<br><b>Replace \"How\" with \"What\" : </b>" . str_replace("How", "What", $text);

    // 5. Create a file named expense.txt and write your expense data into it 
    $file = fopen('expense.txt', 'w');
    fwrite($file, "My expense data");
    fclose($file);

    // 6. Append 
    $data = file_get_contents('expense.txt');
    file_put_contents('expense.txt', $data . ", New expense data");

    $data = file_get_contents('expense.txt');
    echo "<hr>" . $data;
?>