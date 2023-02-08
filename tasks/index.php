<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php'; 

  $result = array();
  foreach ($taskData as $tasks){
    foreach ($userData as $user){
      if ($tasks["userUID"] == $user["uid"]){
        unset($user["uid"]);
        $combinedData[] = array_merge($tasks, $user);
      }
    }
  }

  // echo '<pre>'; var_dump($combinedData); echo '</pre>';
  

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
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Filtered Tasks</h1>
                        <p class="fs-4">Form goes here</p> 
                        <a class="btn btn-primary btn-lg" href="#!">Filter</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">A warm welcome!</h1>
                        <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p> 

                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Due Date</th>
                              <th scope="col">User</th>
                              <th scope="col">Title</th>
                              <th scope="col">Category</th>
                              <th scope="col">Value</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              foreach($combinedData as $key => $task){
                                echo '


                                  <tr>
                                    <th scope="row">1</th>
                                    <td>'.$task['fName'].' '.$task['lName'].'</td>
                                    <td>Otto</td>
                                    <td>'. $task['category'] .'</td>
                                    <td>@mdo</td>
                                  </tr>


                                ';
                              }
                            ?>
                          </tbody>
                        </table>
                      
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
          <?php echo $footer; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/resources/templateFiles/js/scripts.js"></script>
    </body>
</html>