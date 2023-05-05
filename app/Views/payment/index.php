<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<title>Payment &mdash; Fitness</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-button">
            <a href="<?= site_url('payment/new') ?>" class="btn btn-primary">
                New Add
            </a>
        </div>
        <div class="section-header-button">
            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success">Print</button>
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
                <h4>Payment List</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Member</th>
                            <th>Amount</th>
                            <th>Notification Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Payment as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->name ?></td>
                                <td><?= $value->amount ?></td>
                                <td><?= $value->date_buyer ?></td>
                                <td>
                                    <a href="<?= site_url('payment/' . $value->id_payment . '/edit') ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>

                                    <form action="<?= site_url('payment/' . $value->id_payment) ?>" method="post" class="d-inline" id="del-<?= $value->id_payment ?>">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm " data-confirm="Hapus Data?|Apakah Anda Yakin?" data-confirm-yes="submitDel(<?= $value->id_payment ?>)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cetak Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('payment/cetak') ?>" method="post">
                    <div class="form-group">
                        <?= csrf_field() ?>
                        <label for="recipient-name" class="col-form-label">ID PAYMENT</label>
                        <select name="id_payment" class="form-control" required>
                            <option value="id_payment" hidden></option>
                            <?php foreach ($surat as $value) : ?>
                                <option value="<?= $value->id_payment ?>"><?= $value->id_payment ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Cetak</button>
                <a class="btn btn-success" href="<?= site_url('payment/kirim_ke_email/' . $surat[0]->id_payment) ?>">Send</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>