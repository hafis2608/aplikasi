<?= $this->extend('layout/default') ?>


<?= $this->section('content') ?>
<title>UPDATE PAYMENT &mdash; FITNES</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('payment') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>UPDATE PAYMENT</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Edit Payment</h4>
            </div>

            <div class="card-body">
                <form action="<?= site_url('payment/' . $payment->id_payment) ?>" method="post" autocomplete="off">

                    <?= csrf_field() ?>
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
                        <label><B>Amount</B></label>
                        <input type="text" name="amount" value="<?= $payment->amount ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label><B>Date Notification</B></label>
                        <input type="date" name="date_buyer" value="<?= $payment->amount ?>" class="form-control" required>
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