<?php $page = 'index'; ?>
<?php include "top.php";
      include "login.php"; ?>
  <form class="search" action="search.php" method="post">
    <input type="text" name="search-title" placeholder="ISBN, Author, Title, Course, or Instructor...">
    <button type="submit" name="search">Search</button>
  </form>
  <a id="register-button" href="register.php">Register</a>
<?php include "bottom.php"; ?>
