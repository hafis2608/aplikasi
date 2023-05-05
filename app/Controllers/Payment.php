<?php

namespace App\Controllers;

use App\Models\Paymentmodel;
use App\Models\Membermodel;
use Dompdf\Dompdf;
use PHPMailer\PHPMailer\PHPMailer;
use CodeIgniter\RESTful\ResourceController;

class Payment extends ResourceController
{

    // protected $modelName = 'App\Models\Kelasmodel';
    protected $helpers = ['custom'];

    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table("payment");
        $this->payment = new Paymentmodel();
        $this->member = new Membermodel();
        $this->email = \Config\Services::email();
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        $data['surat'] = $this->db->table("payment")->select('id_payment')->get()->getResult();
        $data['Payment'] = $this->payment->getAll();
        return view('payment/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        $data['member'] = $this->member->findAll();
        return view('payment/new', $data);
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->payment->insert($data);
        return redirect()->to(site_url('payment'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $payment = $this->payment->find($id);
        $data['payment'] = $payment;
        $data['member'] = $this->member->findAll();
        return view('payment/edit', $data);
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->payment->update($id, $data);
        return redirect()->to(site_url('payment'))->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->payment->delete($id);
        return redirect()->to(site_url('payment'))->with('success', 'Data Berhasil Dihapus');
    }
    // public function status()
    // {
    //     $data = $this->request->getPost();
    //     $this->payment->update($this->request->getVar('id_payment'), $data);
    //     return redirect()->to(site_url('payment'))->with('success', 'Data Berhasil Divalidasi');
    // }

    public function cetak()
    {
        $data['surat'] = $this->db->table("payment")->select('*')->join('member', 'member.id_member = payment.id_member')->where(["id_payment" => $this->request->getVar('id_payment')])->get()->getResult();
        $data['surek'] = $this->db->table("payment")->select('*')->join('class', 'class.id_member = payment.id_member')->where(["id_payment" => $this->request->getVar('id_payment')])->get()->getResult();
        return view('payment/cetak', $data);
    }
    // public function kirim_ke_email()
    // {
    //     // Ambil ID payment dari request POST
    //     $id_payment = $this->request->getPost('id_payment');

    //     // Ambil data surat berdasarkan ID payment
    //     $surat = $this->surat_model->find($id_payment);

    //     // Buat file PDF menggunakan library Dompdf
    //     $html = view('payment/invoice', ['surat' => $surat]);
    //     $pdf = new Dompdf();
    //     $pdf->loadHtml($html);
    //     $pdf->setPaper('A4', 'portrait');
    //     $pdf->render();
    //     $output = $pdf->output();

    //     // Kirim file PDF sebagai lampiran email menggunakan library PHPMailer
    //     $mail = new PHPMailer(true);
    //     $mail->isSMTP();
    //     $mail->Host       = 'smtp.gmail.com';
    //     $mail->SMTPAuth   = true;
    //     $mail->Username   = 'pyschopat57@gmail.com';
    //     $mail->Password   = 'fnkaobqzlfrudoiq';
    //     $mail->SMTPSecure = 'tls';
    //     $mail->Port       = 587;
    //     $mail->setFrom('pyschopat57@gmail.com', 'pyschopat57');
    //     $mail->addAddress('pyschopat57@example.com', 'pyschopat57');
    //     $mail->addStringAttachment($output, 'invoice.pdf');
    //     $mail->Subject = 'Invoice Payment';
    //     $mail->Body    = 'Please find the attached invoice for your payment.';
    //     $mail->send();

    //     // Redirect ke halaman payment setelah mengirim email
    //     return redirect()->to(site_url('payment'));
    // }
    public function kirim_ke_email()
    {
        // ambil data pembayaran
        $id_payment = $this->request->getVar('id_payment');
        $surat = $this->db->table("payment")->select('*')->join('member', 'member.id_member = payment.id_member')->where(["id_payment" => $id_payment])->get()->getRow();

        // generate file PDF
        $dompdf = new Dompdf();
        $html = view('payment/cetak', ['surat' => $surat]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdf = $dompdf->output();

        // kirim email dengan file PDF terlampir
        $email = new PHPMailer(true);
        $email->SMTPDebug = 0;
        $email->isSMTP();
        $email->Host = 'smtp.gmail.com';
        $email->SMTPAuth = true;
        $email->Username = 'pyschopat57@gmail.com'; // ganti dengan alamat email gmail anda
        $email->Password = 'fnkaobqzlfrudoiq'; // ganti dengan password email gmail anda
        $email->SMTPSecure = 'tls';
        $email->Port = 587;

        $email->setFrom('pyschopat57@gmail.com', 'Pyschopat'); // ganti dengan alamat email dan nama anda
        $email->addAddress('pyschopat57@gmail.com', 'Pyschopat'); // ganti dengan alamat email dan nama penerima
        $email->Subject = 'Invoice Pembayaran';
        $email->Body = 'Terlampir invoice pembayaran sebagai file PDF.';
        $email->addStringAttachment($pdf, 'invoice.pdf');

        $email->send();
        return redirect()->to(site_url('payment'))->with('success', 'File PDF Berhasil Dikirim ke Email');
    }
}
