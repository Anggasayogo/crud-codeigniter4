<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MahasiswaModel;

class Mahasiswa extends Controller
{
    public function index()
    {    
        $model = new MahasiswaModel();
 
        $data['mhs'] = $model->orderBy('id', 'ASC')->findAll();
        return view('mahasiswa', $data);
    } 
    
    public function detail($id)
    {
        $model = new MahasiswaModel();
        $data['mhs'] = $model->where('id',$id)->first();
        return view('mhsdetail',$data);
    }
 
    public function create()
    {    
        return view('createmhs');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new MahasiswaModel();
 
        $data = [
 
            'nama' => $this->request->getVar('nama'),
            'email'  => $this->request->getVar('email'),
            'nim' => $this->request->getVar('nim'),
            'jurusan' => $this->request->getVar('jurusan')
        ];
 
        $save = $model->insert($data);
        session()->setFlashdata('success', 'Data Berhasil ditambahkan');
        return redirect()->to( base_url('/mahasiswa') );
    }
 
    public function edit($id = null)
    {
      
     $model = new MahasiswaModel();
 
     $data['mhs'] = $model->where('id', $id)->first();
 
     return view('ubahmhs', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new MahasiswaModel();

        $data = [
 
            'nama' => $this->request->getVar('nama'),
            'email'  => $this->request->getVar('email'),
            'nim' => $this->request->getVar('nim'),
            'jurusan' => $this->request->getVar('jurusan')
        ];
 
        $id = $this->request->getVar('id');
 
        
        $save = $model->update($id,$data);
        session()->setFlashdata('success', 'Data Berhasil di ubah');
        return redirect()->to( base_url('/mahasiswa') );
    }
 
    public function delete($id = null)
    {
 
     $model = new MahasiswaModel();
 
     $data['user'] = $model->where('id', $id)->delete();
     session()->setFlashdata('success', 'Data Berhasil dihapus');
     return redirect()->to( base_url('/mahasiswa') );
    }
}