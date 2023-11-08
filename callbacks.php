<?php                                                                                                                                                        
include_once "common/onefourone.php";                                                                                                                        
                                                                                                                                                             
$debug->log('Callbacks called with args', $argv);                                                                                                            
                                                                                                                                                             
$script = $argv[0];                                                                                                                                          
$command = $argv[1];                                                                                                                                         
                                                                                                                                                             
if ($command == "--list" || $command == "-l") {                                                                                                              
        echo "media,playlist,lifecycle";                                                                                                                     
        exit(0);                                                                                                                                             
}
