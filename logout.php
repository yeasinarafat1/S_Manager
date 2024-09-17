<?php

/**
 * Logs out the user by destroying the session and removing the
 * "remember me" cookie.
 */
session_start();
session_unset();
session_destroy();

/**
 * Remove the "remember me" cookie by setting its expiration date
 * to a time in the past.
 */
setcookie('remember_username', '', time() - 60*60*24);

/**
 * Redirect the user to the index page after logout.
 */
header('location:index.php');

