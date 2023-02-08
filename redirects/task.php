<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';

  if(isset($_POST['BTN_create']) && $_POST['user'] != "0") {

    $date = date_create($_POST['dateDeadline']);
    $deadlineReformatted = date_format($date, "Y/m/d");

    //Create a new LARGEST UID based on existing UIDs in an array. 
    $largest_uid = 0;
    foreach ($taskData as $item) {
        if ($item['uid'] > $largest_uid) {
            $largest_uid = $item['uid'];
            $newUID = $largest_uid+1;
        }
    }
    
  

    $newFormData = array( 
                    "uid"=> $newUID, 
                    "userUID"=> $_POST['user'], 
                    "title"=> $_POST['title'], 
                    "dateCreate"=>date("Y/m/d"),
                    "dateDeadline"=> $deadlineReformatted, 
                    "dateComplete"=> NULL, 
                    "decription"=> $_POST['description'], 
                    "status"=> "created", 
                    "reward"=> $_POST['reward'], 
                    "timeNeeded"=> $_POST['timeNeeded'], 
                    "category"=> $_POST['category']
                      );
  
  
    array_push($taskData, $newFormData);
    // turn php array back into JSON data
    $taskDataJSON = json_encode($taskData, JSON_PRETTY_PRINT);
    // put in new task into json file
    file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/tasks.json', $taskDataJSON);
  
  }
    
  header('Location: /index.php');
    
  // echo '<pre>'; 
  // var_dump($_POST); 
  // echo '</pre>'



?>