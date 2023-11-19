<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    
    // Only allow specific actions for security
    if ($action === 'runScript') {
        // Execute your script
        exec('git clone https://github.com/Forsaken0129/wifijammer', $output, $returnCode);
        
        // Output the result (for demonstration purposes)
        echo 'Script Output:<br>';
        echo implode('<br>', $output);
        
        // Output the return code (for demonstration purposes)
        echo '<br>Return Code: ' . $returnCode;
    } else {
        echo 'Invalid action';
    }
} else {
    echo 'No action specified';
}
?>
