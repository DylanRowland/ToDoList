<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php'; 

  if (isset($_POST["btnSearch"])) {

    $i = 0;
    foreach($taskData as $task){

      if($task["category"] == $_POST["fliterCategory"]){
      
      $_SESSION[$i] = $task;

      $i++;
      } // end if 
    } // end foreach
    

  } else {
    //error
  }

  echo '<pre>'; 
  var_dump($_SESSION); 
  echo '</pre>';

?>