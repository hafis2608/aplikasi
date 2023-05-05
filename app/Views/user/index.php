<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>

<title>User &mdash; Fitnes</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-button">
            <a href="<?= site_url('user/new') ?>" class="btn btn-primary">
                New Add
            </a>
        </div>
    </div>

    <?php



    if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-bod">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>

    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-bod">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error</b>
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>

    <?php endif; ?>

    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>USER DATA</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th>Id User</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($user as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->name_user ?></td>
                                <td><?= $value->email_user ?></td>
                                <td><?= $value->password_user ?></td>
                                <td>
                                    <?php
                                    if ($value->userlevelid == "1") {
                                        echo "Admin";
                                    } elseif ($value->userlevelid == "2") {
                                        echo "User";
                                    } ?>
                                </td>
                                <td>
                                    <a href="<?= site_url('user/edit/' . $value->id_user) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('user/delete/' . $value->id_user) ?>" method="post" class="d-inline" id="del-<?= $value->id_user ?>">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm " data-confirm="Hapus Data?|Apakah Anda Yakin?" data-confirm-yes="submitDel(<?= $value->id_user ?>)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>