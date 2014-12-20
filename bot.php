<?php
#This function allows prevents your bot to get disconnected after 30 SEC
set_time_limit(0);

#Change "irc.esper.net" to your own server (f.e "irc.freenode.com")
$socket = fsockopen("irc.esper.net", 6667); # Change Port If Neccesory

fputs($socket,"USER DragonPHP DragonPHP DragonPHP : Devoloped");
fputs($socket,"NICK DragonPHP");

$version = "v1.0.0 | Devoloped by Om and Vinoh";

while($logincount < 10) { $logincount++; $data = fgets($socket, 128); echo nl2br($data);
$ex = explode(' ', $data);
if($ex[0] == "PING"){ fputs($socket, "PONG ".$ex[1]."\n"); } flush(); } sleep(1);

fputs($socket,"JOIN #om\n"); # Copy paste it again and Edit Channels for Multiple Channels

        if($ex[0] == "PING"){
            fputs($socket, "PONG ".$ex[1]."\n");
        }
        $
        $command = str_replace(array(chr(10), chr(13)), "", $ex[3]);
        $incoming = substr($data, 18);
        $word = str_replace(array(chr(10), chr(13)), "", $ex[4]);
        $word2 = str_replace(array(chr(10), chr(13)), "", $ex[5]);
        $word3 = str_replace(array(chr(10), chr(13)), "", $ex[6]);
        $word4 = str_replace(array(chr(10), chr(13)), "", $ex[7]);
        $word5 = str_replace(array(chr(10), chr(13)), "", $ex[8]);
		$args = NULL; for ($i = 4; $i < count($ex); $i++) { $args .= $ex[$i] . " "; }
		$args2 = NULL; for ($i = 5; $i < count($ex); $i++) { $args2 .= $ex[$i] . " "; }
		$args3 = NULL; for ($i = 6; $i < count($ex); $i++) { $args3 .= $ex[$i] . " "; }

        function getNick($nick) {
        global $nick;
    }

     if($command == ":!join") {
			     fputs($socket,"JOIN $word\n");
                 fputs($socket, "NOTICE $username :Succesfully joined $word\n");
			} else {
			     fputs($socket, "NOTICE $username :Access is denied\n");
	       	}


if($command == ":!part") {
			fputs($socket,"PART $word\n");
            fputs($socket, "NOTICE $username :Succesfully part $word\n");
			} else {
			fputs($socket, "NOTICE $username :Access is denied\n");
			}

if($command == ":VERSION") {
fputs($socket,"NOTICE $username" .$version. "\n");
}

if ($command == ":!updates") {
	fputs($socket, "NOTICE $username 1: v1.0.0 Bot has Released!\n");
	fputs($socket, "NOTICE $username 2: Added !join and !part commands!\n");
}

if ($command == ":!cmds") {
	fputs($socket, "NOTICE $username Commands are:" .$commands. "\n");
}
fclose($socket)
?>
