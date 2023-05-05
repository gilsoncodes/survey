<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class DataAnalysis extends Component
{
  public $totalParticipants;
  public $totalNever;
  public $totalNeverPerc;
  public function mount(){
      $total = Contact::all();
      $this->totalParticipants = $total->count();
      $totalN = Contact::where('question1','Never')->get() ;
      $this->totalNever = $totalN->count();
      $this->totalNeverPerc = 100*$this->totalNever/$this->totalParticipants ;
  }

    public function render()
    {
        return view('livewire.data-analysis');
    }
}
