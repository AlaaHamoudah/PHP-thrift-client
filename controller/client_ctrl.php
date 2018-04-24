<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

error_reporting(E_ALL);
//load required classes
require_once __DIR__ . '/../lib/Thrift/ClassLoader/ThriftClassLoader.php';
require_once __DIR__ . '/../lib/Thrift/Protocol/TBinaryProtocol.php';
require_once __DIR__ . '/../lib/Thrift/Transport/TBufferedTransport.php';
require_once __DIR__ . '/../lib/Thrift/Transport/TSocket.php';
require_once __DIR__ . '/../gen-php/StringSwap/StringSwap.php';



try {

    $socket = new Thrift\Transport\TSocket('localhost', 9090);
    $transport = new Thrift\Transport\TBufferedTransport($socket);
    $protocol = new Thrift\Protocol\TBinaryProtocol($transport);

    $client = new \StringSwap\StringSwapClient($protocol);
    $transport->open();

    //validate parameter if it is not empty send to server
    if (isset($_POST['textToSwap'])) {
        
        $result = $client->swap($_POST['textToSwap']);
        echo json_encode(array('status' => 'success', 'result' => $result));
        
    } else {
        // if empty return to view
        echo json_encode(array('status' => 'error', 'message' => 'Empty string'));
    }
} catch (IOError $ex) {
    // handle any exception
    echo json_encode(array('status' => 'error', 'message' => $ex->message));
}