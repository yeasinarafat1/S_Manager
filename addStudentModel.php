<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="addstudent.php" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Roll:</label>
            <input type="number" class="form-control" id="roll" name="roll">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Full Name:</label>
            <input type="text" class="form-control" id="fullName" name="fullName">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Semester:</label>
            <select name="semester" id="" class="form-control">
              <option value="1st">1st</option>
              <option value="2nd">2nd</option>
              <option value="3rd">3rd</option>
              <option value="4th">4th</option>
              <option value="5th">5th</option>
              <option value="6th">6th</option>
              <option value="7th">7th</option>
              <option value="8th">8th</option>
            </select>
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Shift</label>
            <select name="shift" id="shift" class="form-control">
              <option value="1st">1st</option>
              <option value="2nd">2nd</option>
            </select>
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Phone Number:</label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="addBtn" class="btn btn-primary">Add Student</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>