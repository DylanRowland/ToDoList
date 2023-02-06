<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions.php'; ?>
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
                      <label for="inputState" class="form-label">Time needed</label>
                      <select id="timeNeeded" name="timeNeeded" class="form-select">
                        <option selected>Choose...</option>
                        <option>5 Minutes</option>
                        <option>10 Minutes</option>
                        <option>15 Minutes</option>
                        <option>30 Minutes</option>
                        <option>1 Hour</option>
                        <option>2 Hours</option>
                        <option>5 Hours</option>
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
                                <h2 class="fs-4 fw-bold">Fresh new layout</h2>
                                <p class="mb-0">With Bootstrap 5, we've created a fresh new layout for this template!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Free to download</h2>
                                <p class="mb-0">As always, Start Bootstrap has a powerful collectin of free templates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                <h2 class="fs-4 fw-bold">Jumbotron hero header</h2>
                                <p class="mb-0">The heroic part of this template is the jumbotron hero header!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                <h2 class="fs-4 fw-bold">Feature boxes</h2>
                                <p class="mb-0">We've created some custom feature boxes using Bootstrap icons!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Simple clean code</h2>
                                <p class="mb-0">We keep our dependencies up to date and squash bugs as they come!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                <h2 class="fs-4 fw-bold">A name you trust</h2>
                                <p class="mb-0">Start Bootstrap has been the leader in free Bootstrap templates since 2013!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
          <?php echo $footer; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/resources/templateFiles/js/scripts.js"></script>
    </body>
</html>