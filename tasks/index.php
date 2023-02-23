<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php'; 

  if ($_GET['search'] == 'yes'){
    $usableTaskData = $_SESSION['searchResults'];
  } else {
    $usableTaskData = $combinedData;
  }

  

  //looking for category
  $categories = array();
  foreach ($combinedData as $cat) {
      $categories[] = $cat['category'];
  }
  $uniqueCats = array_unique($categories);

  

  // echo '<pre>'; 
  // var_dump($uniqueCats); 
  // echo '</pre>';

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
                        <form action="/redirects/search.php" method="post">
                          <select class="form-select" name="fliterCategory">
                            <option value = "none" selected>Choose Category</option>
                            <?php
                              foreach($uniqueCats as $category) {
                                echo '<option value="'.$category.'">'.$category.'</option>';
                              }
                            ?>
                          </select>
                          <br>
                          <select class="form-select" name="fliterUser">
                            <option value = "none" selected>Select a User</option>
                            <?php
                              foreach($userData as $user) {
                                echo '<option value="'.$user["uid"].'">'.$user["fName"]." ".$user["lName"].'</option>';
                              }
                            ?>
                          </select>
                          <br>
                          <input class="btn btn-primary btn-lg" type="submit" value="Search" name="btnSearch" id="btnSearch">
                        </form>
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
                              <th scope="col">Reward</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              foreach($usableTaskData as $key => $task){
                                echo '


                                  <tr>
                                    <td scope="row">'.$task['dateDeadline'].'</td>
                                    <td>'.$task['fName'].' '.$task['lName'].'</td>
                                    <td>'.$task['title'].'</td>
                                    <td>'. $task['category'] .'</td>
                                    <td>'.$task['reward'].'</td>
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