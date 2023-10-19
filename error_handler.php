<?php
include "create_asana_task.php";
include "send_slack_message.php";

// Function to handle regular errors on the site
function handleErrors($errno, $errstr, $errfile, $errline) {
    // Get the server name for identification (server name=>not reliable)
    $serverName = $_SERVER['SERVER_NAME'];
    // Prepare error message removing the sensitive file path info
    $errorMessage = "Error [$errno] on $serverName: $errstr in "  . basename($errfile) . " on line $errline";
    
    // Send the error message to Slack function and include a custom emoji
    sendToSlack($errorMessage,":eyes:");
    postAsana($errorMessage,"Error $errno on $serverName");
}

// Function to handle exceptions and send them to the slack messenger
function handleExceptions($exception) {
    // Extract relevant information from the exception and include (server name=>not reliable)
    $serverName = $_SERVER['SERVER_NAME'];
    $exceptionMessage = $exception->getMessage();
    $exceptionFile = $exception->getFile();
    $exceptionLine = $exception->getLine();
    
    // Prepare error message and store in a variable
    $errorMessage = "Exception on $serverName: $exceptionMessage in " . basename($exceptionFile) . " on line $exceptionLine";
    
    // Send the exception message variable to Slack function and include a custom emoji
    sendToSlack($errorMessage,":warning:");
    postAsana($errorMessage, "Exception on $serverName");
}

// Set the error and exception handlers on the pages that it is required and include this file
set_error_handler('handleErrors');
set_exception_handler('handleExceptions');

// Example error trigger
// trigger_error("This is a test error!", E_USER_ERROR);
// throw new Exception("This is a test exception!");

?>
