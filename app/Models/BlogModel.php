<?php namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table;

    public function __construct() {

        parent::__construct();
        // Memanggil class Database
        $db = \Config\Database::connect();
        // Menginisialisasi $this->table untuk menampung data table product
        $this->table = $this->db->table('blog');
    }

    public function get_blog()
    {
        // Mengembalikan nilai data product disertail dengan output result array
        return $this->table->get()->getResultArray();
    }

    public function insertingdata($data)
    {
        var_dump($data);
    }

} 