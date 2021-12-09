<?php

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
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="user" src="Front end/image/Mask Group.png" alt="user">ADMIN
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
                    </ul>
                </li>
                <li><img class="logo" src="Front end/image/Vector.png" alt="Vector">BAPER</li>
                
                </li>
            </ul>
        </div>
    </div>
    <div class="nav2 border-bottom">
        <div class="container ">
            <ul>
                <li>
                    <a href="index_admin.php">List Buku</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Absen
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="absen_anggota.php">Absen</a></li>
                        <li><a class="dropdown-item" href="riwayat_absen_anggota.php">Riwayat Absen</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Peminjaman
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="peminjaman_buku.php">Pinjam Buku</a></li>
                        <li><a class="dropdown-item" href="riwayat_peminjaman_admin.php">Riwayat Peminjaman</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pengembalian
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="pengembalian_buku.php">Kembalikan Buku</a></li>
                        <li><a class="dropdown-item" href="riwayat_pengembalian_admin.php">Riwayat Pengembalian</a></li>
                    </ul>
                </li>
                <li>
                    <a href="anggota_admin.php">Anggota</a>
                </li>
            </ul>
        </div>
    </div>
</nav>