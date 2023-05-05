<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>
<title>New Schedule &mdash; Fitness</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('schedule') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>New Schedule</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Add Schedule</h4>
            </div>
            <div class="card-body">

                <form action="<?= site_url('schedule') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label><B>Date</B></label>
                        <input type="date" name="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>Start time</B></label>
                        <input type="date" name="start_time" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label><B>End time</B></label>
                        <input type="date" name="end_time" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>Email</B></label>
                        <input type="text" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>Id class</B></label>
                        <input type="text" name="class_id" class="form-control" required>
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