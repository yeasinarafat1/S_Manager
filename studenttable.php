<!-- <?php include('dbcon.php')?> -->
<div class="container w-full overflow-x-auto">
        <table id="myTable" class="table">
   <thead>
    <tr>
      <th scope="col">Roll</th>
      <th scope="col">Name</th>
      <th scope="col">Semester</th>
      <th scope="col">Shift</th>
      <th scope="col">Phone</th>
      <?php if (isset($_COOKIE['remember_username'])) {
                ?>
                <th>Action</th>
                <th>Action</th>
            <?php
            }
            ?>
    </tr>
  </thead>
  <tbody>
    <?php
$query = "select * from `student`";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Failed to fetch    ");
} else {
    
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
      <td scope="row"><?php echo $row["roll"]; ?></td>
      <td><?php echo $row["fullName"]; ?></td>
      <td><?php echo $row["semester"]; ?></td>
      <td><?php echo $row["shift"]; ?></td>
      <td><?php echo $row["phoneNumber"]; ?></td>
      <?php if (isset($_COOKIE['remember_username'])) {
                ?>
                <td><a href="deletestudent.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                <td><button class="btn btn-secondary px-4" data-bs-toggle="modal" data-bs-target="#<?php echo $row["id"] ?>" data-bs-whatever="@mdo">Edit</button></td>
                 <div class="modal fade" id="<?php echo $row["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="editstudent.php" method="post">
          <input class="hidden"  type="number" value="<?php echo $row["id"] ?>" name="id">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Roll:</label>
            <input type="number" class="form-control" id="roll" name="roll" value="<?php echo $row["roll"] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Full Name:</label>
            <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo $row["fullName"] ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Semester:</label>
            <select name="semester" id="" class="form-control" value="<?php echo $row["semester"] ?>">
               <?php
            $semesters = ['1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th'];
            foreach ($semesters as $semester) {
                $selected = $semester === htmlspecialchars($row["semester"], ENT_QUOTES, 'UTF-8') ? 'selected' : '';
                echo "<option value=\"$semester\" $selected>$semester</option>";
            }
            ?>
            </select>
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Shift</label>
            <select name="shift" id="shift" class="form-control"  value="<?php echo $row["shift"] ?>">
              <?php
            $shifts = ['1st', '2nd'];
            foreach ($shifts as $shift) {
                $selected = $shift === htmlspecialchars($row["shift"], ENT_QUOTES, 'UTF-8') ? 'selected' : '';
                echo "<option value=\"$shift\" $selected>$shift</option>";
            }
            ?>
            </select>
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Phone Number:</label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="<?php echo $row["phoneNumber"] ?>">
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="addBtn" class="btn btn-success">Edit Student</button>
          </div>
        </form>
      </div>
    </div>
  </div>
            <?php
            }
            ?>
    </tr>
    
    <?php
    }
}



?>

  </tbody>

</table>
            <p id="noSearchResult" class="hidden text-center  fw-medium mt-4 fs-4">No Search Result Found</p>

    </div>