<?php
session_start();
include('Assets/php/dbconfig.php');
if ($_SERVER['PHP_AUTH_USER']!="prakhar" ||$_SERVER['PHP_AUTH_PW']!="popatpanda") {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Chal Nikal';
    exit;
}
else{
	include('pre3.php');
	for($i=1;$i<=$_SESSION['numq'];$i++)
		if($_SESSION['done'][$i]==1)
			$query=mysqli_query($dbconfig,"DELETE FROM check_req WHERE questionid=$i");
}
?><!doctype html>
<html>
   <head>
 <link rel='icon' href='icon/favicon.ico' type='image/x-icon'>
   <title>Godmode</title>
   <link rel="stylesheet" href="Assets/css/style.css">
     <meta http-equiv="refresh" content="10"/>
   <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		  <link rel='icon' href='icon/favicon.ico' type='image/x-icon'>
</head>
      <body>
		  </html>
    
      <div id="wrapperlead" class='divlead'> <div class='divlead'> 
       <center>
           <br>
           <?php
		   if(isset($_SESSION['oi']))
		   {
			   echo "The Question has already been answered.";
			   unset($_SESSION['oi']);
		   }
		   if(isset($_SESSION['cs']))
		   {
			   echo "Answer Confirmed.";
			   unset($_SESSION['cs']);
		   }
		   if(isset($_SESSION['ds']))
		   {
			   echo "Entry Deleted (marks deducted).";
			   unset($_SESSION['ds']);
		   }
		   ?><br><br>
           
           <table cellspacing="10" cellpadding="15">
               
            <tr>
              <th>Question No.</th>
               <th>UserName</th>
                <th>Team Name</th>
                <th>Controls</th>
            </tr>
             <?php
		$i=$_GET['i'];
        $result = mysqli_query($dbconfig,"SELECT username,teamname, questionid FROM check_req ORDER BY time");
        

        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
				<td>{$row['questionid']}</td>
                      <td>{$row['username']}</td>
					  <td>{$row['teamname']}</td>
					  <td><form method='post' action='confirm.php'><input type='hidden' name='user' value='{$row['username']}'><button type='submit' id='button' value='{$row['questionid']}' name='confirm'>Confirm</button></form><form method='post' action='delete.php'><input type='hidden' name='user' value='{$row['username']}'><button type='submit' id='button' value='{$row['questionid']}' name='delete'>Delete</button></form></td>
					  </tr>";

                
            }
        }
    		?>
            
        </table>
		  </center>
		  </div></div>
		  </body>
		  </html>