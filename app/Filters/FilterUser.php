<?php

namespace App\Filters;

// use App\Controllers\Auth;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterUser implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session('id_user')) {
            return redirect()->to(site_url('login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->level == 2) {
            return redirect()->to(site_url('home'));
        }
    }
}
