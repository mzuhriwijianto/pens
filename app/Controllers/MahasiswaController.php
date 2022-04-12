<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    protected $mahasiswa;
 
    function __construct()
    {
        $this->mahasiswa = new Mahasiswa();
    }
    
    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswa->findAll();

        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        $this->mahasiswa->insert([
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
            'jurusan' => $this->request->getPost('jurusan'),
        ]);

		return redirect('mahasiswa')->with('success', 'Data Added Successfully');	
    }

    public function edit($id)
    {
        $this->mahasiswa->update($id, [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
            'jurusan' => $this->request->getPost('jurusan'),
        ]);

            return redirect('mahasiswa')->with('success', 'Data Updated Successfully');
    }

	public function delete($id){
        $this->mahasiswa->delete($id);

        return redirect('mahasiswa')->with('success', 'Data Deleted Successfully');
    }
}
