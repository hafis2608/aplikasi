<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>
<title>New Member &mdash; Fitness</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('member') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>New Member</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Add Member</h4>
            </div>
            <div class="card-body">

                <form action="<?= site_url('member') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label><B>Name</B></label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>Adress</B></label>
                        <input type="text" name="address" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>Phone</B></label>
                        <input type="text" name="phone" class="form-control" required>
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