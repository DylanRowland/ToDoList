<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php'; 
foreach ($taskData as $task){
  // echo $task['reward']. "<br>";
}

function sortByReward($a,$b){
  if($a['reward'] == $b['reward']){
    return 0;
  }
  return ($a['reward'] < $b['reward'])? 1:-1;
}

usort ($taskData, 'sortByReward');




$i=0;
while ($i<=4){
  echo $taskData[$i]['reward']. "<br>";
  $i++;
}

//  echo '<pre>'; 
// var_dump($taskData); 
// echo '</pre>';


?>