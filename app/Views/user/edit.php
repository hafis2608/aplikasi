<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>
<title>Update User &mdash; SPPD</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('user') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update User</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Edit User</h4>
            </div>
            <div class="card-body">
                <form action="<?= site_url('user/update/' . $user->id_user) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label>NAMA PENGGUNA</label>
                        <input type="text" name="name_user" value="<?= $user->name_user ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="text" name="email_user" value="<?= $user->email_user ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="text" name="password_user" value="<?= $user->password_user ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>LEVEL</label>
                        <select class="form-control" name="userlevelid" id="userlevelid">
                            <option value="1" <?php if ($user->userlevelid == 1) : echo " selected" ?> <?php endif; ?>>Admin</option>
                            <option value="2" <?php if ($user->userlevelid == 2) : echo " selected" ?> <?php endif; ?>>User</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>



                </form>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>