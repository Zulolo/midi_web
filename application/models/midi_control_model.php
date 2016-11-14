<?php
class midi_control_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }
    
    private function writeToUnixSocket($cString){
        $unix_socket = stream_socket_client('unix:///tmp/.midi-unix', $errorno, $errorstr);
        if (!$unix_socket) {
            log_message('error', 'Connect to Unix socket error.');
            echo "$errorstr ($errorno)<br />\n";
            return FALSE;
        } else {
            log_message('debug', $cString);
            if (FALSE == fwrite($unix_socket, $cString)){
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
    
    public function changeProgram($channel = NULL, $instrument = NULL){
        if ($channel == NULL || $instrument == NULL){
            log_message('error', 'Instrument is 0.');
            return FALSE;
        }
        return $this->writeToUnixSocket("channel:" . $channel . ",instrument:" . $instrument . 
            ",EMPTY_PARA_1:0,EMPTY_PARA_2:0\n");
    }
    
    public function setVolume($volume = 0){
        return $this->writeToUnixSocket("volume:" . $volume . ",EMPTY_PARA_1:0,EMPTY_PARA_2:0,EMPTY_PARA_3:0\n");
    }
}