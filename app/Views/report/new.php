<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>
<title>New Report &mdash; Fitness</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('report') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>New Report</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Add Report</h4>
            </div>
            <div class="card-body">

                <form action="<?= site_url('report') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label><B>Start date</B></label>
                        <input type="date" name="start_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>End date</B></label>
                        <input type="date" name="end_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>Total revenue</B></label>
                        <input type="text" name="total_revenue" class="form-control" required>
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