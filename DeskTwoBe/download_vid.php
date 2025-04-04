<?php
    shell_exec("rm -rf outvid*");
    $link = $_POST["vidlink"];
    $link = escapeshellarg($link);
    shell_exec("yt-dlp -o outvid " . $link . "--no-playlist");
    echo "video downloaded!\n now it's uploadin to 0x0.st";
    echo shell_exec("curl 0x0.st -F 'file=@outvid.mp4'") . "\n" ;
    echo shell_exec("curl 0x0.st -F 'file=@outvid.webm'") . "\n";
    echo shell_exec("curl 0x0.st -F 'file=@outvid.mkv'") . "\n";
?>