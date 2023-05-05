<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<title>Schedule &mdash; Fitness</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-button">
            <a href="<?= site_url('schedule/new') ?>" class="btn btn-primary">
                NEW ADD
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
                <h4>Member List</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Start time</th>
                            <th>End time</th>
                            <th>Email</th>
                            <th>Id kelas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>