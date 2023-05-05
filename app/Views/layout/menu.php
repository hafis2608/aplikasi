<!-- <li class="menu-header">Main Menu</li> -->
<li>
    <a class="nav-link" href="<?= site_url("") ?>"><i class="fas fa-home"></i><span>Home</span></a>
</li>
<?php if (session()->level == 1) : ?>

    <li>
        <a class="nav-link" href="<?= site_url("user") ?>"><i class="fas fa-user"></i><span>User data</span></a>
    </li>
    <li class="menu-header">Main Data</li>
    <li class="nav-item dropdown">

    <li>
        <a class="nav-link" href="<?= site_url("member") ?>"><i class="fas fa-user"></i><span>Member</span></a>
        <a class="nav-link" href="<?= site_url("trainer") ?>"><i class="fas fa-user"></i><span>Trainer</span></a>
        <a class="nav-link" href="<?= site_url("kelas") ?>"><i class="fas fa-book"></i><span>Class</span></a>
        <a class="nav-link" href="<?= site_url("payment") ?>"><i class="fas fa-gift"></i><span>Payment</span></a>
        <a class="nav-link" href="<?= site_url("kwitansi") ?>"><i class="fas fa-file"></i><span>Kwitansi</span></a>
        <a class="nav-link" href="<?= site_url("report") ?>"><i class="fas fa-file"></i><span>Report</span></a>
    <?php endif; ?>

    </li>
    <?php if (session()->level == 2 or session()->level == 1) : ?>
        <li class="nav-item dropdown">
            <?php if (session()->level == 2) : ?>
        <li>
            <a class="nav-link" href="<?= site_url("kelas") ?>"><i class="fas fa-user"></i><span>Class</span></a>
            <a class="nav-link" href="<?= site_url("kwitansi") ?>"><i class="fas fa-file"></i><span>Kwitansi</span></a>
        <?php endif; ?>
        </li>
        </li>
    <?php endif; ?>