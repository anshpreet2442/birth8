<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedName = isset($_POST['name']) ? $_POST['name'] : '';

    if (!empty($selectedName)) {
        // Save the selected name to the existing log file with a new line
        $logFile = 'birthdayrecipeints.log';
        file_put_contents($logFile, $selectedName . PHP_EOL, FILE_APPEND);
        
        // You can also store the selected name in a database or perform additional actions here

        echo 'Name submitted successfully!';
    } else {
        echo 'Please select a name.';
    }
} else {
    header('Location: index.html');
    exit;
}
?>
