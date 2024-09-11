<nav class="w-full">
        <div class="logo">
            S_MANGER
        </div>
        <div class="input-group">
        <div class="searchInput">
          <input id="searchInput" placeholder="Search Student" type="text" class="form-control">
        </div>
            
            
        <?php if (isset($_COOKIE['remember_username'])) {
                ?>
                <a href="/logout.php" class='btn btn-danger rounded'>Logout</a>
                <?php
            }else{
                ?>
                <a href="/login.php" class='btn btn-info text-white rounded px-3'>Admin</a>
                <?php
            };
             ?>
        </div>
    </nav>