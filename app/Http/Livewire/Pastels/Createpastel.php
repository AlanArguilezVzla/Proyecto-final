<?php

namespace App\Http\Livewire\Pastels;

use App\Models\Pastel;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Createpastel extends Component
{
    use WithFileUploads;
    public Pastel $pastel;
    public $foto;

    public function mount(){
        $this->pastel = new Pastel();
    }
    public function render()
    {
        return view('livewire.pastels.createpastel');
    }

    public function crear(){

        $this->validate();
        if ($this->foto != null) {
            $this->pastel->foto = Storage::disk('public')->put('images/pastels', $this->foto);
        }
        $this->pastel->save();
        return redirect(route('pastels'));
    }

    protected function rules(){
        return RulesPastel::reglas();

    }
}
