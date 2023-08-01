<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->AuthModel = new AuthModel();
    }
    public function login()
    {
        session();
        $data = [
            'title' => 'Login',
            'error' => false,
            'validation' => \Config\Services::validation()
        ];
        return view('auth/login', $data);
    }

    public function register()
    {
        session();
        $data = [
            'title' => 'Register',
            'error' => false,
            'validation' => \Config\Services::validation()
        ];
        return view('auth/register', $data);
    }

    public function simpanregister()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|max_length[10]|is_unique[pengguna.username]',
                'errors' => [
                    'required' => 'Username harus diisi!',
                    'max_length' => 'Maaf, Username tidak boleh lebih dari 10 huruf!',
                    'is_unique' => 'Maaf, Username yang anda masukkan sudah terdaftar!'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi!'
                ]
            ],
            'ulangipassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Ulangi Password harus diisi!',
                    'matches' => 'Password anda tidak sama!'
                ]
            ],
            'namapengguna' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi!'
                ]
            ]
        ])) {
            return redirect()->to('/register')->withInput();
        }

        date_default_timezone_set('Asia/Jakarta');
        $this->AuthModel->save([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'nama_pengguna' => $this->request->getPost('namapengguna'),
            'level' => 'pelanggan'
        ]);
        session()->setFlashdata('pesan', 'Anda berhasil mendaftar, silahkan login!');
        return redirect()->to('/login');
    }

    public function ceklogin()
    {
        if ($this->validate([
            'username' => [
                'rules' => 'required|is_not_unique[pengguna.username]',
                'errors' => [
                    'required' => 'Maaf, Username harus diisi!',
                    'is_not_unique' => 'Maaf, Username yang anda masukkan salah!'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Maaf, Password harus diisi!'
                ]
            ]
        ])) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $cek = $this->AuthModel->where('username', $username)->first();
            $pass = $cek['password'];
            if ($cek['username'] == $username) {
                if (password_verify($password, $pass)) {
                    session()->set('login', true);
                    session()->set('idpengguna', $cek['id_pengguna']);
                    session()->set('username', $cek['username']);
                    session()->set('level', $cek['level']);
                    session()->set('nama_pengguna', $cek['nama_pengguna']);
                    return redirect()->to('/home');
                } else {
                    return redirect()->to('/login')->withInput();
                }
            } else {
                return redirect()->to('/login')->withInput();
            }
        } else {
            return redirect()->to('/login')->withInput();
        }
    }

    public function logout()
    {
        session()->remove('login');
        session()->remove('idpengguna');
        session()->remove('username');
        session()->remove('nama_pengguna');
        session()->remove('level');
        session()->setFlashdata('logout', 'Anda Berhasil Logout!');
        return redirect()->to('/login');
    }
}
