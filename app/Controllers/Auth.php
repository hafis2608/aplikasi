<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    public function login()
    {
        if (session('id_user')) {
            return redirect()->to(site_url('home'));
        }
        return view('auth/login');
    }

    public function loginProcess()

    {
        $post = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['email_user' => $post['email']]);
        $user = $query->getRow();
        if ($user) {
            if (password_verify($post['password'], $user->password_user)) {
                $params = ['id_user' => $user->id_user, 'level' => $user->userlevelid, 'username' => $user->name_user];
                session()->set($params);
                return redirect()->to(site_url('home'));
            } else {
                return redirect()->back()->with('error', 'Password tidak sesuai');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'));
    }
    public function index2()
    {
        $data = [
            'title' => 'Send Message',
        ];

        return view('login', $data);
    }

    public function send()
    {
        $name = $this->request->getPost('name');
        $phone = $this->request->getPost('phone');
        $message = $this->request->getPost('message');

        $url = 'https://api.whatsapp.com/send?phone=' . $phone . '&text=' . urlencode($message);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return redirect()->to($url);
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerProcess()
    {
        $post = $this->request->getPost();
        var_dump($post);
        $query = $this->db->table('users')->getWhere(['email_user' => $post['email']]);
        $user = $query->getRow();


        if ($user) {
            return redirect()->back()->with('error', 'Email sudah terdaftar');
        } else {
            $data = [
                'name_user' => 'kundua',
                'email_user' => $post['email'],
                'password_user' => password_hash($post['password'], PASSWORD_DEFAULT),
                'userlevelid' => 2, // set userlevelid sesuai dengan level yang diinginkan
            ];

            $insert = $this->db->table('users')->insert($data);
            if ($insert) {
                return redirect()->to(site_url('login'))->with('success', 'Registrasi berhasil, silahkan login');
            } else {
                return redirect()->back()->with('error', 'Registrasi gagal');
            }
        }
    }
}
