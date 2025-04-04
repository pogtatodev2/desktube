<?php 
    // passw checker

    if (isset($_GET["deskpass"])) {
        $pass = $_GET["deskpass"];
        if ($pass !== "switchflip") {
            die("<b>wrong password dumbass</b>");
        }
    } else {
        die("<b>where the <h1>FUCK</h1> is the password</b>");
    }
?>

<h3>
    <head>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>

    <body>    
        <h1><b>DESKTWOBE!!!!!</b></h1>
        <div id="vidbox">
        <h3>what's the link to it</h3> 
        <form action="download_vid.php" method="POST"> 
            <input type="text" name="vidlink"> 
            <button type="submit" class="button" value="Send">gimme thAT SHIT!! (takes time to load)</button>
        </form>
        </div>
        <br>
        <p>
            most of the time it takes a while to load the video so idk go do something maybe i'll even add something here later who knows this project also took a shitton of time so i HOPE it works like there isn't anything that SEEMS like it would go wrong who knows tho
            <br>actually have this predownloaded gif
            <br><img src="/img/fish.gif">
            <br>look at him go oh yeah
        </p>
    </body>

    <script type="text/javascript" src="main.js"></script>
</html>