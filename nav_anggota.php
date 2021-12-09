<?php
require_once('db_login.php');
?>

<!-- NAVBAR -->
<nav id="bg-nav" class="">
  <div class="container">
    <div class="nav">
      <h1><img src="Front end/image/Group 12.png" alt="logo"></h1>
      <form id="cari" action="./detail_buku.php?id=" <?php if (isset($row->id_buku)) {
                                                        echo $row->id_buku;
                                                      } ?>>
        <div>
          <i class="fas fa-search"></i>
          <input list="id" name="id" placeholder="SEARCH" />
          <datalist id="id">
            <?php
            $query = " SELECT id_buku, judul FROM buku ORDER BY judul ";
            $result = mysqli_query($db, $query);
            if (!$result) {
              die("Could not query the database: <br />" . $db->error);
            }
            while ($row = $result->fetch_object()) {
              echo '<option value="' . $row->id_buku . '">' . $row->judul . '</option>';
            }
            $result->free();
            ?>
          </datalist>
        </div>
      </form>
      <ul>
        <li class="dropdown">
          <a <?php if (isset($_SESSION['username'])) echo "class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"" ?> href="login.php" id="navbarDropdown" role="button" aria-expanded="false"><img src="Front end/image/user.png" alt="user">
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
        <li><img src="Front end/image/Vector.png" alt="Vector">BAPER</a></li>
      </ul>
    </div>
  </div>
  <div class="nav2 border-bottom">
    <div class="container">
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <?php
          if (isset($_SESSION['username'])) echo "<a href=\"riwayat_peminjaman.php\">Riwayat Peminjaman</a>"
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>