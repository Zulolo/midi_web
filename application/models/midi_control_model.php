<?php
class midi_control_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function changeProgram($channel = 0)
    {
        if ($channel == 0)
        {
            log_message('error', 'channel is 0.');
            return FALSE;
        }
        $unix_socket = stream_socket_client('unix:///tmp/.midi-unix', $errorno, $errorstr);
        if (!$unix_socket) {
            log_message('error', 'Connect to Unix socket error.');
            echo "$errorstr ($errorno)<br />\n";
            return FALSE;
        } else {
            if (FALSE == fwrite($unix_socket, "GET / HTTP/1.0\r\nHost: www.example.com\r\nAccept: */*\r\n\r\n")){
                fclose($unix_socket);
                log_message('error', 'Write to Unix socket error.');
                echo "$errorstr ($errorno)<br />\n";
                return FALSE;
            }else{
                fclose($unix_socket);
                return TRUE;
            } 
        }
    }
}