<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BlogModel;

class Home extends BaseController
{
	// Buat variabel untuk menyimpan data model
    protected $ProductModel;
    // Buat variabel untuk menampung request
	protected $request;
	// Buat variabel untuk menampung parser
    protected $parser;


	public function __construct() {

        // Mendeklarasikan class ProductModel menggunakan $this->ProductModel
        $this->BlogModel = new BlogModel();
        // Mendeklarasikan service request menggunakan $this->request
        $this->request = \Config\Services::request();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
		*/
		// load templating enggine parser
		$this->parser = \Config\Services::parser();
    }


	public function index()
	{
		return view('home');
	}
	
	public function store()
	{
		$name = $this->request->getPost('product_name');
		$desc = $this->request->getPost('product_description');
		$data = [
			'blog_title' => $name,
			'blog_description' => $desc
		];

		$this->BlogModel->insertingdata($data);
		
	}

	public function create()
	{
		$data = [
			'blog_title'   => 'My Blog Title',
			'blog_heading' => 'My Blog Heading',
			'blog_entries' => [
                ['title' => 'Title 1', 'body' => 'Body 1'],
                ['title' => 'Title 2', 'body' => 'Body 2'],
                ['title' => 'Title 3', 'body' => 'Body 3'],
                ['title' => 'Title 4', 'body' => 'Body 4'],
                ['title' => 'Title 5', 'body' => 'Body 5']
			]
	    ];
	
	    return $this->parser->setData($data)->render('blog_template');
	}


}
