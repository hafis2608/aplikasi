<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>



<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="/template/assets/img/avatar/gym.png" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="container">
                                <?php if (session()->getFlashdata('error')) : ?>
                                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                                <?php endif; ?>

                                <form action="<?= site_url('auth/registerProcess') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </form>

                                <p>Already have an account? <a href="<?= site_url('login') ?>">Login here</a>.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
</body>

</html>



<?= $this->endSection(); ?>