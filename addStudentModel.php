<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="addstudent.php" method="post">
          <?php
          /**
           * The form elements for adding a new student
           */
          ?>
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
              <?php
              /**
               * The list of semesters from which the user can select
               */
              $semesters = ['1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th'];
              foreach ($semesters as $semester) {
                echo "<option value=\"$semester\">$semester</option>";
              }
              ?>
            </select>
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Shift</label>
            <select name="shift" id="shift" class="form-control">
              <?php
              /**
               * The list of shifts from which the user can select
               */
              $shifts = ['1st', '2nd'];
              foreach ($shifts as $shift) {
                echo "<option value=\"$shift\">$shift</option>";
              }
              ?>
            </select>
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Phone Number:</label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
          </div>
          
          <?php
          /**
           * The buttons to submit the form and close the modal
           */
          ?>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="addBtn" class="btn btn-primary">Add Student</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
