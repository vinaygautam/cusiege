<?php	
session_start();
require_once('Assets/php/dbconfig.php'); 

//Choose Table accordingly


$table=$_SESSION['table'];

//Create a query to fetch all the questions

$query = "select * from pre_lev3";

//Run the query

$query_result = $dbconfig->query($query);

//Count the number of returned items from the database

$num_questions_returned = $query_result->num_rows;

 

if ($num_questions_returned < 1){

    exit();}

 

//Create an array to hold all the returned questions

$questionsArray = array();

 

//Add all the questions from the result to the questions array

while ($row = $query_result->fetch_assoc()){

    $questionsArray[] = $row;

}

 

//Create an array of Correct answers

$questions = array();
$questionid = array();
$done = array();
$score = array();
$i=1;
foreach($questionsArray as  $question){
	 $questions[$i] = $question['question'];
	$questionid[$i]= $question['questionid'];
	$done[$i]=$question['done'];
	$score[$i]=$question['score'];
	 
	
$i++;
}

 $_SESSION['q']=$questions;$_SESSION['qid']=$questionid;

$_SESSION['score']=$score;

$_SESSION['done']=$done;


$_SESSION['numq']=$num_questions_returned;
?>