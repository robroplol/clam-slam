<?php

namespace App\Http\Livewire;
use App\Models\BandMember;

use Livewire\Component;

class Counter extends Component
{
    public $name;
    public $clam_count;
    public $cp_count;

    public function clam_increment() 
    {
        $bandmember = Bandmember::where('name', $this->name)->get();
        $this->clam_count++;
        $bandmember[0]->clam_count = $this->clam_count;
        $bandmember[0]->save();
    }
    
    public function cp_increment() 
    {
        $bandmember = Bandmember::where('name', $this->name)->get();
        $this->cp_count++;
        $bandmember[0]->cp_count = $this->cp_count;
        $bandmember[0]->save();

    }
    
    public function render()
    {
        return view('livewire.counter');
    }
}
