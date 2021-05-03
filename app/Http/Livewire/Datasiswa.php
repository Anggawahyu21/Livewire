<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class Datasiswa extends Component
{
    public $siswas, $nama, $kelas, $alamat, $tmplhr, $tgllhr, $siswa_id;
    public $isModalOpen = 0;

    public function render()
    {
        $this->siswas = Siswa::all();
        return view('livewire.siswa');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm()
    {
        $this->nama = '';
        $this->kelas = '';
        $this->alamat = '';
        $this->tmplhr = '';
        $this->tgllhr = '';
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'tmplhr' => 'required',
            'tgllhr' => 'required',
        ]);

        Siswa::updateOrCreate(['id' => $this->siswa_id], [
            'nama' => $this->nama,
            'kelas' => $this->kelas,
            'alamat' => $this->alamat,
            'tmplhr' => $this->tmplhr,
            'tgllhr' => $this->tgllhr,
        ]);

        session()->flash('message', $this->siswa_id ? 'Siswa Update.' : 'Siswa Created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $siswa = Siswa::findorFail($id);
        $this->id = $id;
        $this->nama = $siswa->nama;
        $this->kelas = $siswa->kelas;
        $this->alamat = $siswa->alamat;
        $this->tmplhr = $siswa->tmplhr;
        $this->tgllhr = $siswa->tgllhr;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        Siswa::find($id)->delete();
        session()->flash('message', 'Siswa Deleted.');
    }

}
