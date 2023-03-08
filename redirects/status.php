<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';  

  if (isset($_GET['uid'])) {
    // build session
    foreach($combinedData as $task){ // START: Foreach
  
      if($task['uid'] == $_GET['uid']){ // START: if
        $_SESSION['statusUpdate'] = $task;
      } //END: if 
    } // END: Foreach
  
    header('Location: /tasks/status.php');

  } elseif (isset($_POST['btnUpdate'])) {
    // edit data

    if($_POST['statusUpdate'] == "0"){
       header('Location: /index.php');
    } else {
      // echo $_POST['statusUpdate'];


      $indexNumber = 0;
      foreach($taskData as $task){ // START: Foreach

        
        if($task['uid'] == $_SESSION['statusUpdate']['uid']){ // START: if
          
          $taskData[$indexNumber]["status"] = $_POST['statusUpdate'];

          // turn php array back into JSON data
          $taskDataJSON = json_encode($taskData, JSON_PRETTY_PRINT);
          // put in new task into json file
          file_put_contents($taskDataFile, $taskDataJSON);
          header('Location: /index.php');

                                                             
        } //END: if 

        $indexNumber++;
                                  
      } // END: Foreach
      
    } // END: Else
    
  } else {
  // you do not belong here
    echo "in the wrong place";
  }




  
  // echo '<pre>'; 
  // var_dump($taskData); 
  // echo '</pre>';
  
?>