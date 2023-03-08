<?php session_start();

  $taskDataFile = $_SERVER['DOCUMENT_ROOT'] . '/data/tasks.json';
  $userDataFile = $_SERVER['DOCUMENT_ROOT'] . '/data/users.json';

  // JSON get data
  $jsonTasks = file_get_contents($taskDataFile);
  $jsonUsers = file_get_contents($userDataFile);

  // JSON Decoding
  $taskData = json_decode($jsonTasks, TRUE);
  $userData = json_decode($jsonUsers, TRUE);

  //sorting data by the rewards
  function sortByReward($a,$b){
    if($a['reward'] == $b['reward']){
      return 0;
    }
    return ($a['reward'] < $b['reward'])? 1:-1;
  }



  
  $combinedData = array();
  foreach ($taskData as $tasks){
    foreach ($userData as $user){
      if ($tasks["userUID"] == $user["uid"]){
        unset($user["uid"]);
        $combinedData[] = array_merge($tasks, $user);
      }
    }
  }





  // echo '<pre>'; var_dump($combinedData); echo '</pre>';






  // ************** basic page variables below ************

  $nav = '
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="/index.php">Partner Task Site</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.php">Create Task</a></li>
                        <li class="nav-item"><a class="nav-link" href="/tasks/index.php">List</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        ';

  $footer = '
    <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
  ';



?>
