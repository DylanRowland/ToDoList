<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php'; 

  //need to finish the unique task

  $taskCount = 0;
  $catCountChores = 0;
  $timeCount5 = 0;
  $timeCount300 = 0;
  $taskCountPastDue = 0;
  $sumOfRewards = 0;
  $sumOfChoresReward = 0;
  $sumOfTime = 0;
  $sumOfPastDueReward = 0;
  $countNext7days = 0;
  $averageRewardAmount = 0;
  $NewTasks7days = 0;

  foreach($taskData as $task){ // START: Foreach task

                              
    $sumOfTime = $sumOfTime + $task['timeNeeded'];
    $sumOfRewards = $sumOfRewards + $task['reward'];
    $taskCount++;

    $averageRewardAmount = $sumOfRewards / $taskCount;
    $averageRewardRounded = ceil($averageRewardAmount);   
               
    if($task['category'] == "Chores"){ 
      $catCountChores++;
      $sumOfChoresReward = $sumOfChoresReward + $task['reward'];
    }
    if($task['timeNeeded'] == "5"){
      $timeCount5++;
    }
    if($task['timeNeeded'] == "300"){
      $timeCount300++;
    }
    if(strtotime($task['dateDeadline'])      <    strtotime(date("h:i:sa"))) {

      
      $sumOfPastDueReward = $sumOfPastDueReward + $task['reward'];
      
      $taskCountPastDue++;
     }
    if(strtotime($task['dateDeadline'])  >  strtotime(date("h:i:sa")) && strtotime($task['dateDeadline']) < strtotime(date("h:i:sa"))+604800  ) {
      $countNext7days++;
     }
    if(strtotime($task['dateCreate']) > strtotime(date("h:i:sa"))-604800  ) {
      $NewTasks7days++;
     }

 
     
      
  }// END: Foreach task

  $userCount = 0;
  foreach($userData as $user){ // START: Foreach user
    $userCount++;
  }    // END: Foreach User

  $sortedTaskData = $taskData;
  //sorting task data by reward  
  usort ($sortedTaskData, 'sortByReward');
  
  // START: Sort top 5 rewards
  $i=0;
  $top5Reward = [];
  
  while ($i<=4){
    $top5Reward[$i] = $sortedTaskData[$i];
    
    $i++;
  }
  // END: Sort top 5 rewards

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/resources/templateFiles/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php echo $nav; ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                  <form class="row g-3" action="/redirects/task.php" method="POST">
    
                    <h1> Task Entry Form</h1>
                    <div class="col-md-6">
                      <label for="title" class="form-label">Title</label>
                      <input type="textbox" class="form-control" name = "title" id="title">
                    </div>


                    <div class="col-md-6">
                      <label for="user" class="form-label">User</label>
                      <select class="form-select" name="user" id="user">
                        <option value= "0" selected> Choose a user </option>

                        <?php 
                          foreach($userData as $user){
                            echo '<option value="'.  $user['uid'].  '">' . $user['fName'] . ' ' . $user['lName'] . '</option>';
                          }
                        ?>

                      </select>
                    </div>
                  
                                      
                    <div class="col-md-6">
                      <label for="reward" class="form-label">Reward</label>
                      <input type="textbox" class="form-control" name="reward" id="reward">
                    </div>


                    <div class="col-md-6">
                      <label for="deadline" class="form-label">Date of Deadline</label>
                      <input type="date" class="form-control" name="deadline" id="deadline">
                    </div>

                                      
                    <div class="col-12">
                      <label for="description" class="form-label">Description</label><br>
                      <textarea name="description" id="description" class="form-control rows="2" cols="100"></textarea>
                    </div>
   
                                
                    <div class="col-md-6">
                      <label for="category" class="form-label">Categories</label>
                      <select id="category" name="category" class="form-select">
                        <option selected>Choose...</option>
                        <option>Personal</option>
                        <option>Chores</option>
                        <option>Math</option>
                        <option>Science</option>
                        <option>English</option>
                        <option>History</option>
                      </select>
                    </div>
                  
                                      
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Minutes needed</label>
                      <select id="timeNeeded" name="timeNeeded" class="form-select">
                        <option selected>Choose...</option>
                        <option>5</option>
                        <option>10</option>
                        <option>15</option>
                        <option>30</option>
                        <option>60</option>
                        <option>120</option>
                        <option>300</option>
                      </select>
                    </div>

    
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary" id="BTN_create" name="BTN_create">Submit</button>
                    </div>
    
                  </form>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">

                  
                    <div class="col-lg-6 col-xxl-4 mb-5">
                      
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold">Task Count </h2>
                                <p class="mb-0"> Total Tasks: <?php echo $taskCount; ?></p>
                            </div>
                        </div>


                      
                    </div>
                  
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold"> User Count</h2>
                                <p class="mb-0">Total Users: <?php echo $userCount; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                <h2 class="fs-4 fw-bold">Chore Count</h2>
                                <p class="mb-0">Total Chores: <?php echo $catCountChores; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                <h2 class="fs-4 fw-bold">Time Count</h2>
                                <p class="mb-0">Total Quick Tasks: <?php echo $timeCount5; ?></p>
                                <p class="mb-0">Total long Tasks: <?php echo $timeCount300; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Deadline:</h2>
                                <p class="mb-0"> Past Due:  <?php echo $taskCountPastDue;?> </p>
                                <p class="mb-0"> Within 7 days:  <?php echo $countNext7days;?> </p>
                                <p class="mb-0"> New Within 7 days:  <?php echo $NewTasks7days;?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                <h2 class="fs-4 fw-bold">Time and Reward Total: </h2>
                                <p class="mb-0">Total Rewards: <?php echo $sumOfRewards; ?></p>
                                <p class="mb-0">Total Chore Reward: <?php echo $sumOfChoresReward; ?></p>
                                <p class="mb-0">Total lost Reward: <?php echo $sumOfPastDueReward; ?></p>
                                <p class="mb-0">Total Minutes: <?php echo $sumOfTime; ?></p>
                                <p class="mb-0">Average Reward: <?php echo $averageRewardRounded; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                          <div class="card bg-light border-0 h-100">
                              <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                  <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                  <h2 class="fs-4 fw-bold">Top 5 Rewards Total: </h2>
                                    <?php 
                                      foreach($top5Reward as $task){
                                        echo $task['title']. ': ' . $task['reward'] . "<br>";
                                      }
  
                                    ?>
                                  <p class="mb-0"></p>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
          <?php echo $footer; ?>
        <!-- Bootstrap core JavaScript-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JavaScript -->
        <script src="/resources/templateFiles/js/scripts.js"></script>
    </body>
</html>