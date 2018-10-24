<?php
session_start();
include('Assets/php/dbconfig.php');
if ($_SERVER['PHP_AUTH_USER']!="prakhar" ||$_SERVER['PHP_AUTH_PW']!="popatpanda") {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Chal Nikal';
    exit;
}
?>
	<html>
   <head>
 <link rel='icon' href='icon/favicon.ico' type='image/x-icon'>
   <title>Leaderboards</title>
   <link rel="stylesheet" href="Assets/css/style.css">
     <meta http-equiv="refresh" content="10"/>
   <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		  <link rel='icon' href='icon/favicon.ico' type='image/x-icon'>
</head>
      <body>
    
      <div id="wrapperlead" class='divlead'> <div class='divlead'> 
       <center>
           <br><br><br>
           
           <table cellspacing="10" cellpadding="15">
               
            <tr>
              <th>Rank</th>
               <th>Name</th>
                <th>Team Name</th>
                <th>Score</th>
            </tr>
             <?php
		$i=$_GET['i'];
			   if($i!=3)
        $result = mysqli_query($dbconfig,"SELECT username,teamname, score FROM res_lev$i ORDER BY score DESC,tie DESC,time ASC");
			   else
				   $result = mysqli_query($dbconfig,"SELECT username,teamname, score FROM res_lev$i ORDER BY score DESC,time ASC");
				   
        $rank = 1;

        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
				<td>$rank</td>
                      <td>{$row['username']}</td>
					  <td>{$row['teamname']}</td>
					  <td>{$row['score']}</td>
					  </tr>";

                $rank++;
            }
        }
    		?>
            
        </table>
		  </center>
		  </div></div>
		  </body>
		  </html>
