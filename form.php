  <form class="row g-3" action="/redirects/task.php" method="POST">
    
                    <h1> Task Entry Form</h1>
                    <div class="col-md-6">
                      <label for="title" class="form-label">Title</label>
                      <input type="textbox" class="form-control" name = "title" id="title">
                    </div>


                    <div class="col-md-6">
                      <label for="user" class="form-label">User</label>
                      <input type="textbox" class="form-control" name="user" id="user">
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
                      <label for="categories" class="form-label">Categories</label>
                      <select id="categories" name="categories" class="form-select">
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
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
    
  </form>