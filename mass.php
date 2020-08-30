<?php
error_reporting(0);
define('blue',"\e[1;34m");
define('green',"\e[1;32m");
define('red',"\e[1;31m");
@system('clear');
   echo red."__  __              _   _   _        _   ____
|  \/  |__ _ ______ | |_| |_| |_ _ __(_) / / /
| |\/| / _` (_-<_-< | ' \  _|  _| '_ \_ / / /
|_|  |_\__,_/__/__/ |_||_\__|\__| .__(_)_/_/
                                |_|.php\n";
   echo "\tCoded By ./EcchiExploit\n";
   echo blue."\n{!} Open File List Web => ".red;
   $domain = trim(fgets(STDIN,1024));
   $url = file_get_contents($domain) or die("\nFile Not Found\n");
   $exp = explode("\n",$url);
   $ok = array_unique($exp);
   foreach($ok as $expl){
      if(!preg_match("/http/",$expl)){
         $expl = "http://".$expl;
      }
      else{
         $expl = $expl;
      }
      echo "$expl\n";
      $save = fopen("result.txt",'a+');
      fwrite($save,"$expl\n");
      fclose($save);
    }
    echo green."\n      [!] Total sites : " .count($exp). " [!]\n";
    echo green."\n\t\tEnd\n";
    echo green."\tSave As result.txt\n";
?>
