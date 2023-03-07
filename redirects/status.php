<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';  

  foreach($taskData as $task){ // START: Foreach

    if($task['uid'] == $_GET['uid']){ // START: if
      $_SESSION['statusUpdate'] = $task;
    } //END: if 
  } // END: Foreach

  header('Location: /tasks/status.php');

  // echo '<pre>'; 
  // var_dump($_SESSION); 
  // echo '</pre>';
  
?>