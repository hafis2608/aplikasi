<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>
<title>Update member&mdash; Fitness</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('member') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Member</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Edit member</h4>
            </div>

            <div class="card-body">
                <form action="<?= site_url('member/update/' . $member->id_member) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="nama_dasar" value="<?= $member->name ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="<?= $member->address ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" value="<?= $member->phone ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?= $member->email ?>" class="form-control" required>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>