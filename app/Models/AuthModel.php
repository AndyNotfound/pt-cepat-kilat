<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'pengguna';
    protected $allowedFields = ['username', 'password', 'nama_pengguna', 'level'];
    protected $useTimestamps = true;
    protected $createdField = 'dibuat_pada';
    protected $updatedField = 'diubah_pada';

    public function login($username, $password)
    {
        return $this->db->table('user')->where(['username' => $username, 'password' => $password])->get()->getRowArray();
    }
}
