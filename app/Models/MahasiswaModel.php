<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'student';
    protected $allowedFields = [
        'id','nama','nim','email','jurusan'
    ];
}