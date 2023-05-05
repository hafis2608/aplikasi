<?php

if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $phone   = $_POST['phone'];
    $email   = $_POST['email'];
    $package   = $_POST['package'];
    $no_wa  = $_POST['noWa'];
    header("location:htpps://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DPaket:%20$package%20%0DTelpon:%20$phone");
} else {
    echo "
    <script>
         window.location=history.go(-1);
    </script>
    ";
}
