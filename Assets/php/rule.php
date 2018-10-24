<?php
session_start();
if(!isset($_SESSION['iframe'])|| !isset($_GET['internal']) || $_SESSION['iframe'] != $_GET['internal'])	
    {
        die("There's more of me ..... But less to see.|| Literally.");
    }
unset($_SESSION['iframe']);
echo "<html><head>
 <link rel='icon' href='/favicon.ico' type='image/x-icon'><link rel='stylesheet' href='../css/style.css'>
     
    <link href='https://fonts.googleapis.com/css?family=Bubbler+One' rel='stylesheet'><head>
 <link rel='icon' href='/favicon.ico' type='image/x-icon'> <body>
       <div id='wrapper' class='div'><div class='div'> <center><h1><b>The rules of CRYPTEX 2.0 are as follows:</b></h1></center> 
        <ul type='circle'><br><br><br>
           <li>This is a 2 day long online puzzle event that's open for all</li><br><br>
<li>Any sort of cheating, asking/obtaining info (including hints/clues) from any sources other than the official Technolympics sources is STRICTLY PROHIBITED and will result in the IMMEDIATE & PERMANENT DISQUALIFICATION from the hunt</li><br><br>
<li>The clues are hidden visually, in the source codes, and at many other places in the website(s)</li><br><br>
<li>There are no uppercase letters or spaces or special characters in the answers unless mentioned so</li><br><br>
<li>The portals will close at midnight on 4th November (23:59:59)</li><br><br>

           <li>.......and of course, you gotta hurry, the <i>clock</i> is ticking</li><br><br>
        </ul>

         <center><font color='black'>4&#128566;&#128566;4</font></center></div></div>

    </body>";?>
	