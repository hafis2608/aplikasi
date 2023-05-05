<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>
<title>New User &mdash; Fitnes</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('user') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>New User</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>USER</h4>
            </div>
            <div class="card-body">
                <form action="<?= site_url('user') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label><B>NAMA</B></label>
                        <input type="text" name="name_user" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>EMAIL</B></label>
                        <input type="text" name="email_user" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label><B>PASSWORD</B></label>
                        <input type="password" name="password_user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><B>LEVEL</B></label>
                        <select class="form-control" name="userlevelid" id="userlevelid">
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>