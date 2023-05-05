<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>
<title>UPDATE ClASS &mdash; FITNES</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('kelas') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>UPDATE CLASS</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Edit Class</h4>
            </div>

            <div class="card-body">
                <form action="<?= site_url('kelas/' . $kelas->id_class) ?>" method="post" autocomplete="off">

                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label><B>Member Name</B></label>
                        <select name="id_member" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($member as $key => $value) : ?>
                                <option value="<?= $value->id_member ?>"><?= $value->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><B>Trainer Name</B></label>
                        <select name="id_trainer" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($trainer as $key => $value) : ?>
                                <option value="<?= $value->id_trainer ?>"><?= $value->trainer_name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Class Name</label>
                        <input type="text" name="class_name" value="<?= $kelas->class_name ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>Start Date</B></label>
                        <input type="date" name="startdate" value="<?= $kelas->startdate ?>" class=" form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>End Date</B></label>
                        <input type="date" name="enddate" value="<?= $kelas->enddate ?>" class="form-control" required>
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