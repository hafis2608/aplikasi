<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourcePresenter;



class Report extends ResourcePresenter
{

    // protected $modelName = 'App\Models\Schedulemodel';
    protected $helpers = ['custom'];

    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        // $data['schedule'] = $this->model->findAll();
        return view('report/index');
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
        return view('report/new');
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        // $data = $this->request->getPost();
        // $this->model->insert($data);
        // return redirect()->to(site_url('schedule'))->with('success', 'Data Berhasil Disimpan');
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
        // $data['schedule'] = $this->model->where('schedule_id', $id)->first();
        // return view('schedule/edit', $data);
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
        // $data = $this->request->getPost();
        // $this->model->update($id, $data);
        // return redirect()->to(site_url('schedule'))->with('success', 'Data Berhasil Diupdate');
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
        // $this->model->where('schedule_id', $id)->delete();
        // return redirect()->to(site_url('schedule'))->with('success', 'Data Berhasil Dihapus');
    }
}
