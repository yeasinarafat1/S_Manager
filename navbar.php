<nav class="w-full">
    <!-- The navigation bar at the top of the page. Contains a search input and a button to log in or out. -->
    <div class="logo">
        <!-- The logo of the application. -->
        S_MANGER
    </div>
    <div class="input-group">
        <!-- The search input and button. -->
        <div class="searchInput">
            <!-- The search input. -->
            <input id="searchInput" placeholder="Press CTRL+K to search" type="text" class="form-control">
        </div>
        <?php
        // Determine whether the user is logged in or not.
        if (isset($_COOKIE['remember_username'])) {
            // If the user is logged in, show a logout button.
            ?>
            <a href="/logout.php" class='btn btn-danger rounded'>Logout</a>
            <?php
        } else {
            // If the user is not logged in, show a login button.
            ?>
            <a href="/login.php" class='btn btn-info text-white rounded px-3'>Admin</a>
            <?php
        };
        ?>
    </div>
</nav>
