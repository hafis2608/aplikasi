<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\Kwitansimodel;


class Kwitansi extends ResourcePresenter
{

    // protected $modelName = 'App\Models\MemberModel';
    // protected $modelName = 'App\Models\Kwitansimodel';
    // protected $helpers = ['custom'];

    function __construct()
    {
        $this->kwitansi = new KwitansiModel();
    }

    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['kwitansi'] = $this->kwitansi->findAll();
        return view('kwitansi/index', $data);
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
        return view('kwitansi/new');
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
        $this->kwitansi->insert($data);
        return redirect()->to(site_url('kwitansi'))->with('success', 'Data Berhasil Disimpan');
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
        $data['kwitansi'] = $this->kwitansi->where('no_kwitansi', $id)->first();
        return view('kwitansi/edit', $data);
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
        $this->kwitansi->update($id, $data);
        return redirect()->to(site_url('kwitansi'))->with('success', 'Data Berhasil Diupdate');
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
        $this->kwitansi->where('no_kwitansi', $id)->delete();
        return redirect()->to(site_url('kwitansi'))->with('success', 'Data Berhasil Dihapus');
    }
    public function status($id = null)
    {
        $data = $this->request->getPost();
        $this->kwitansi->update($id, $data);
        return redirect()->to(site_url('kwitansi'))->with('success', 'Data Berhasil Divalidasi');
    }
}
