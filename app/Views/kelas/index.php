<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<title>Class &mdash; Fitness</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-button">
            <a href="<?= site_url('kelas/new') ?>" class="btn btn-primary">
                New Add
            </a>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
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
                <h4>Class List</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Member</th>
                            <th>Class</th>
                            <th>Trainer</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <?php if (session()->level == 1) : ?>
                                <th>Action</th>
                            <?php endif; ?>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Kelas as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->name ?></td>
                                <td><?= $value->class_name ?></td>
                                <td><?= $value->trainer_name ?></td>
                                <td><?= $value->startdate ?></td>
                                <td><?= $value->enddate ?></td>
                                <?php if (session()->level == 1) : ?>
                                    <td>
                                        <a href="<?= site_url('kelas/' . $value->id_class . '/edit') ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>

                                        <form action="<?= site_url('kelas/' . $value->id_class) ?>" method="post" class="d-inline" id="del-<?= $value->id_class ?>">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-sm " data-confirm="Hapus Data?|Apakah Anda Yakin?" data-confirm-yes="submitDel(<?= $value->id_class ?>)">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                <?php endif; ?>
                                <td>
                                    <?php if ($value->status == 0) : ?>
                                        <?php if (session()->level == "2") :  ?>
                                            <form action=" <?= site_url('kelas/' . $value->id_class . '/validasi') ?>" method="post">
                                                <?= csrf_field() ?>
                                                <div class="d-grid gap-2 d-md-block">
                                                    <input type="hidden" name="id_class" value="<?= $value->id_class ?>">
                                                    <input type="hidden" name="status" value="1">
                                                    <button class="btn btn-warning btn-sm" type="submit">Validasi Data</button>
                                                </div>
                                            </form>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if ($value->status == 1) : ?>
                                        <button class="btn btn-primary btn-sm" type="button"><i class="fas fa-check"></i></button>
                                </td>
                            <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>