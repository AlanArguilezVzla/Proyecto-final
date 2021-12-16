<?php

namespace App\Http\Livewire\Pastels;

use App\Models\Pastel;
use Livewire\Component;

class IndexPastels extends Component
{
    // protected $paginationTheme='bootstrap';
    public function render()
    {
        $pastels = Pastel::paginate(20);
        return view('livewire.pastels.index-pastels',compact('pastels'));
    }
}
