<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>
<title>New Member &mdash; Fitness</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('kwitansi') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>New Kwitansi</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Add Kwitansi</h4>
            </div>
            <div class="card-body">

                <form action="<?= site_url('kwitansi') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label><B>Kwitansi</B></label>
                        <input type="file" name="upload_kwitansi" class="form-control" required>
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