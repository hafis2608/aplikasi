<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>
<title>New Trainer &mdash; Fitness</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('trainer') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>New Trainer</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Add Trainer</h4>
            </div>
            <div class="card-body">

                <form action="<?= site_url('trainer') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label><B>Name</B></label>
                        <input type="text" name="trainer_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>Phone</B></label>
                        <input type="text" name="no_handphone" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>Email</B></label>
                        <input type="text" name="email" class="form-control" required>
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