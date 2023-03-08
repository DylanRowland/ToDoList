<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';  

  // echo '<pre>'; 
  // var_dump($_SESSION); 
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
                        <h1 class="display-5 fw-bold">Update Status</h1>
                        <form action="/redirects/status.php" method="post">

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
                            <tr>
                              <td> <?php echo $_SESSION['statusUpdate']['dateDeadline'];?> </td>
                              <td> <?php echo $_SESSION['statusUpdate']['fName'] . " " . $_SESSION['statusUpdate']['lName'];?> </td>
                              <td> <?php echo $_SESSION['statusUpdate']['title'];?> </td>
                              <td> <?php echo $_SESSION['statusUpdate']['category'];?> </td>
                              <td> <?php echo $_SESSION['statusUpdate']['reward'];?> </td>
                            </tr>
                          </tbody>
                        </table>



                          

                          <label>Update the Status of the Task</label>
                          <br>
                          <br>
                          <select name="statusUpdate">
                            <option value = "0">
                              Choose Status
                            </option>
                            <option value = "completed">
                              Completed
                            </option>
                            <option value = "canceled">
                              Canceled
                            </option>
                          </select>
                          <br>
                          <br>
                          <input class="btn btn-primary btn-lg" type="submit" value="submit" name="btnUpdate">
                          
                        </form>
                        
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