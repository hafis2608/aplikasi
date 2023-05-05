<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>

<title>Kwitansi &mdash; Fitness</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <?php if (session()->level == "2") : ?>
        <div class="section-header">
            <div class="section-header-button">
                <a href="<?= site_url('kwitansi/new') ?>" class="btn btn-primary">
                    New add
                </a>
            </div>
        </div>
    <?php endif; ?>

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
                <h4>Data Kwitansi</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bukti</th>
                            <th>Action</th>
                            <th>Download</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kwitansi as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td>
                                    <?php if ($value->upload_kwitansi) : ?>
                                        <img src="<?= base_url('uploads/berkas/' . $value->upload_kwitansi) ?>" width="100" height="100">
                                    <?php else : ?>
                                        <span class="text-muted">No Image</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= site_url('kwitansi/edit/' . $value->no_kwitansi) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('kwitansi/delete/' . $value->no_kwitansi) ?>" method="post" class="d-inline" id="del-<?= $value->no_kwitansi ?>">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm " data-confirm="Hapus Data?|Apakah Anda Yakin?" data-confirm-yes="submitDel(<?= $value->no_kwitansi ?>)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="<?= base_url('uploads/berkas/' . $value->upload_kwitansi) ?>" class="btn btn-info btn-sm mt-2" download><i class="fas fa-download"></i> Download</a>
                                </td>
                                <td>
                                    <?php if ($value->status == 0) : ?>
                                        <?php if (session()->level == "1") : ?>
                                            <form action=" <?= site_url('kwitansi/' . $value->no_kwitansi . '/validasi') ?>" method="post">
                                                <?= csrf_field() ?>
                                                <div class="d-grid gap-2 d-md-block">
                                                    <input type="hidden" value=" <? $value->no_kwitansi ?>">
                                                    <input type="hidden" name="status" value="2">
                                                    <button class="btn btn-warning btn-sm" type="submit">Validasi Data</button>
                                                </div>
                                            </form>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if ($value->status == 2) : ?>
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