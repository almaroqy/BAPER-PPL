<?php
session_start();
?>

<!-- NAVBAR -->
<nav id="bg-nav" class="">
  <div class="container">
    <div class="nav">
      <h1><img src="Front end/image/Group 12.png" alt="logo"></h1>
      <form action="">
        <i class="fas fa-search"></i>
        <input type="search" name="search" placeholder="SEARCH" />
      </form>
      <ul>
        <li class="dropdown">
          <a <?php if(isset($_SESSION['username'])) echo "class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\""?> href="login.php" id="navbarDropdown" role="button" aria-expanded="false"><img src="Front end/image/user.png" alt="user">
            <?php
            if (isset($_SESSION['username'])) {
              echo $_SESSION['username'];
            } else {
              echo 'LOGIN';
            }
            ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
          </ul>
        </li>
        <li><img src="Front end/image/Vector.png" alt="Vector">NAMA PERPUS</a></li>
      </ul>
    </div>
  </div>
  <div class="nav2 border-bottom">
    <div class="container">
      <ul>
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Riwayat Peminjaman</a>
        </li>
      </ul>
    </div>
  </div>
</nav>