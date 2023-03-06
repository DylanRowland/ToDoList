<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php'; 

  $sortedTaskData = $taskData;

foreach ($taskData as $task){
  // echo $task['reward']. "<br>";
}

// function sortByReward($a,$b){
//   if($a['reward'] == $b['reward']){
//     return 0;
//   }
//   return ($a['reward'] < $b['reward'])? 1:-1;
// }

usort ($sortedTaskData, 'sortByReward');




$i=0;
$top5Reward = [];

while ($i<=4){
  echo $sortedTaskData[$i]['reward']. "<br>";
  $top5Reward[$i] = $sortedTaskData[$i];
  
  $i++;
}

 echo '<pre>'; 
var_dump($top5Reward); 
echo '</pre>';


?>