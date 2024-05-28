<!-- <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Welcome, <?php echo $_SESSION['user_name'];?>! </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav nav-pills">
      <li class="nav-item active">
        <a class="nav-link active" aria-current="page" href="index.php">List<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo ($current_page == 'livesearch.php' OR $current_page == 'update.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="livesearch.php">Live Seach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> 
  </div>
</nav> -->



<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Welcome, <?php echo $_SESSION['user_name']; ?>!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav nav-pills">
      <li class="nav-item <?php echo ($current_page == 'index3.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="index3.php">List<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo ($current_page == 'livesearch.php' OR $current_page == 'update.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="livesearch.php">Live Seach</a>
      </li>
      <li class="nav-item <?php echo ($current_page == 'register.php' OR $current_page == 'update.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item <?php echo ($current_page == 'logout.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>