<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>

    <style type="text/css" media="print">
        @media print {
            #printPageButton {
                display: none;
            }
        }

        body {
            padding: auto;
            margin: auto;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table.mayor tr td {
            font-size: 13px;
            border: 1px solid;
        }

        table {
            border-collapse: collapse;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <center>
        <br><br><br>
        <a href="<?= site_url('payment/') ?>" class="btn btn-warning " id="printPageButton">Back</a>
        <button id="printPageButton" class="btn btn-primary" onclick="window.print();">Cetak</button>
        <br><br>
        <table>
            <tr>
                <!-- <td><img alt="image" width="90" src="<?= base_url() ?>/template/assets/img/avatar/logo.png" class="rounded-circle mr-1"></td> -->
                <td>
                    <center>
                        <font size="4"><b>DMAX FITNESS</b></font><br>
                        <div class="float-right">
                            Kode Pos 27372
                        </div>
                        <div class="float-left">
                            Jl. Dr. Wahidin No.3, Sawahan, Kec. Padang Tim., Kota Padang, Sumatera Barat 25125&ensp;
                        </div>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <hr color="black">
                </td>
            </tr>
            <table>
                <tr>
                    <td>
                        <center>
                            <font size="2"><b>INVOICE</b></font><br>
                        </center>
                    </td>
                </tr>
            </table>
            <table class="mayor">
                <thead>
                    <tr>
                        <td class="text">NO</td>
                        <td class="text">Name</td>
                        <td class="text">Amount</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($surat as $index => $data) :
                    ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->amount ?></td>

                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </table>

</body>

</html>

<script type="text/javascript">
    window.print();
</script>