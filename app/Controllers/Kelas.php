<?php

namespace App\Controllers;


use App\Models\Kelasmodel;
use App\Models\Membermodel;
use App\Models\Trainermodel;
// use App\Models\Trainermodel;
use CodeIgniter\RESTful\ResourceController;

class Kelas extends ResourceController
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
        $this->builder = $this->db->table("class");
        $this->kelas = new Kelasmodel();
        $this->member = new Membermodel();
        $this->trainer = new Trainermodel();
        $this->db = \Config\Database::connect();
        // $this->trainer = new Trainermodel();
    }
    public function index()
    {
        $data['Kelas'] = $this->kelas->getAll();
        return view('kelas/index', $data);
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
        $data['trainer'] = $this->trainer->findAll();
        $data['member'] = $this->member->findAll();
        return view('kelas/new', $data);
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
        $this->kelas->insert($data);
        // $this->model->insert($data);
        return redirect()->to(site_url('kelas'))->with('success', 'Data Berhasil Disimpan');
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
        $kelas = $this->kelas->find($id);
        $data['kelas'] = $kelas;
        $data['member'] = $this->member->findAll();
        $data['trainer'] = $this->trainer->findAll();
        return view('kelas/edit', $data);
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
        $this->kelas->update($id, $data);
        return redirect()->to(site_url('kelas'))->with('success', 'Data Berhasil Diupdate');
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
        $this->kelas->delete($id);
        return redirect()->to(site_url('kelas'))->with('success', 'Data Berhasil Dihapus');
    }
    public function status()
    {
        $data = $this->request->getPost();
        $this->kelas->update($this->request->getVar('id_class'), $data);
        return redirect()->to(site_url('kelas'))->with('succes', 'Data Berhasil Divalidasi');
    }
}
