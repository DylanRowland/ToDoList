<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php'; 

  if (isset($_POST["btnSearch"])) {

    $searchResultsIndex = 0;
    
    //clearing the session search result
    $_SESSION['searchResults'] = [];
    
    //looping through the combined data
    foreach($combinedData as $key => $task){
      
      //checking to see if the values match
      if($_POST['fliterCategory'] == $task['category']){
        
        //search match data. needs a session
        $_SESSION['searchResults'][$searchResultsIndex] = $task;
        $searchResultsIndex++;
        
      } //end of the if in foreach
    
    } //end of the foreach

    header('Location: /tasks/index.php?search=yes');
    
  } //end of the if

  // echo '<pre>'; 
  // var_dump($_SESSION['searchResults']); 
  // echo '</pre>';

?>