<?php
class Message {
    public function perform() {

        $name = $this->args['name'] ?? 'anonymous';
        $message = $this->args['message'] ?? 'unknown';

        $url = 'http://socket-server:2021?name=' . $name . '&message=' . urlencode($message);
        echo $url . "\n";

        $ch = curl_init();
 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $errNo = curl_errno($ch);
        print_r($output);
        echo "error no: $errNo\n";
 
        curl_close($ch);
    }
}