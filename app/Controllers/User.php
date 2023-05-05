<?php

namespace App\Controllers;

use App\Models\UserModel;
// use App\Models\Sptdasarmodel;
use CodeIgniter\RESTful\ResourcePresenter;


class User extends ResourcePresenter
{

    protected $modelName = 'App\Models\UserModel';
    protected $helpers = ['custom'];
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {

        $data['user'] = $this->model->findAll();
        return view('user/index', $data);
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
        return view('user/new');
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $model = new UserModel();
        $data = [
            'name_user'     => $this->request->getVar('name_user'),
            'email_user'    => $this->request->getVar('email_user'),
            'userlevelid'   => $this->request->getVar('userlevelid'),
            'password_user' => password_hash($this->request->getVar('password_user'), PASSWORD_BCRYPT)
        ];
        $model->save($data);
        return redirect()->to(site_url('user'))->with('success', 'Data Berhasil Disimpan');
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
        $data['user'] = $this->model->where('id_user', $id)->first();
        return view('user/edit', $data);
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
        $model = new UserModel();
        $data = [
            'name_user'     => $this->request->getVar('name_user'),
            'email_user'    => $this->request->getVar('email_user'),
            'userlevelid'   => $this->request->getVar('userlevelid'),
            'password_user' => password_hash($this->request->getVar('password_user'), PASSWORD_BCRYPT)
        ];
        $model->update($id, $data);
        return redirect()->to(site_url('user'))->with('success', 'Data Berhasil Diupdate');
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
        $this->model->where('id_user', $id)->delete();
        return redirect()->to(site_url('user'))->with('success', 'Data Berhasil Dihapus');
    }
}
