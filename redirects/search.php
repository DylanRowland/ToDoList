<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php'; 


  if (isset($_POST["btnSearch"])) {


    
    if ($_POST["fliterCategory"] == "none" && $_POST["fliterUser"] == "none"){
      
      header('Location: /tasks/index.php');
      exit();



    } else if ($_POST["fliterCategory"] != "none" && $_POST["fliterUser"] == "none"){
      
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


      
    } else if ($_POST["fliterCategory"] == "none" && $_POST["fliterUser"] != "none"){
      
      $searchResultsIndex = 0;
      //clearing the session search result
      $_SESSION['searchResults'] = [];
      
      //looping through the combined data
      foreach($combinedData as $key => $task){
        
        //checking to see if the values match
        if($_POST['fliterUser'] == $task['userUID']){
          
          //search match data. needs a session
          $_SESSION['searchResults'][$searchResultsIndex] = $task;
          $searchResultsIndex++;
          
        } //end of the if in foreach
      
      } //end of the foreach


      
    } else {

      $searchResultsIndex = 0;
       //clearing the session search result
      $_SESSION['searchResults'] = [];
      
      //looping through the combined data
      foreach($combinedData as $key => $task){
      
        if($_POST['fliterCategory'] == $task['category'] && $_POST['fliterUser'] == $task['userUID']){ // if both are used

          //search match data. needs a session
          $_SESSION['searchResults'][$searchResultsIndex] = $task;
          $searchResultsIndex++; 

                                                                                                      
                                                                                                      
        } // end of if() both used

      } // end of the foreach
      
    } // end of else


  
  } //end of the if


  header('Location: /tasks/index.php?search=yes');

  // echo '<pre>'; 
  // var_dump($_SESSION); 
  // echo '</pre>';

?>