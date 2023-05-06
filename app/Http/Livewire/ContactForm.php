<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Mail\ContactMarkdown;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactForm extends Component
{
    public $surveyID;
    public $flash = false;
    public $question1;
    public $applicable = true;
    public $errorQuestion1;
    public $errorQuestion4;
    public $errorQuestion5;
    public $errorQuestion6;
    public $errorQuestion7;
    public $errorQuestion8;
    public $errorQuestion9;
    public $errorQuestion10;
    public $errorQuestion11;
    public $errorQuestion12;
    public $errorQuestion13;
    public $errorQuestion14;
    public $errorQuestion15;
    public $errorQuestion16;
    public $errorQuestion17;
    public $errorQuestion18;
    public $errorQuestion19;
    public $question2a;
    public $question2b;
    public $question2c;
    public $question2d;
    public $question2e;
    public $question2f;
    public $question3a;
    public $question3b;
    public $question3c;
    public $question3d;
    public $question4;
    public $question5;
    public $question6;
    public $question7;
    public $question8;
    public $question9;
    public $question10;
    public $question11;
    public $question12;
    public $question13;
    public $question14;
    public $question15;
    public $question16;
    public $question17;
    public $question18;
    public $question19;
    public $comments;
    public function errorQuestion1(){
       $this->errorQuestion1 = false;
        if($this->question1 == 'Never'){
           $this->applicable = false;
        }else{
          $this->applicable = true;
        }
    }
    public function errorQuestion4(){
      $this->errorQuestion4 = false;
    }
    public function errorQuestion5(){
      $this->errorQuestion5 = false;
    }
    public function errorQuestion6(){
      $this->errorQuestion6 = false;
    }
    public function errorQuestion7(){
      $this->errorQuestion7 = false;
    }
    public function errorQuestion8(){
      $this->errorQuestion8 = false;
    }
    public function errorQuestion9(){
      $this->errorQuestion9 = false;
    }
    public function errorQuestion10(){
      $this->errorQuestion10 = false;
    }
    public function errorQuestion11(){
      $this->errorQuestion11 = false;
    }
    public function errorQuestion12(){
      $this->errorQuestion12 = false;
    }
    public function errorQuestion13(){
      $this->errorQuestion13 = false;
    }
    public function errorQuestion14(){
      $this->errorQuestion14 = false;
    }
    public function errorQuestion15(){
      $this->errorQuestion15 = false;
    }
    public function errorQuestion16(){
      $this->errorQuestion16 = false;
    }
    public function errorQuestion17(){
      $this->errorQuestion17 = false;
    }
    public function errorQuestion18(){
      $this->errorQuestion18 = false;
    }
    public function errorQuestion19(){
      $this->errorQuestion19 = false;
    }
    public function closeFlashMessage(){
      $this->flash = false;
    }
    public function submitForm(){
        $this->errorQuestion1 = true;
        $this->errorQuestion4 = true;
        $this->errorQuestion5 = true;
        $this->errorQuestion6 = true;
        $this->errorQuestion7 = true;
        $this->errorQuestion8 = true;
        $this->errorQuestion9 = true;
        $this->errorQuestion10 = true;
        $this->errorQuestion11 = true;
        $this->errorQuestion12 = true;
        $this->errorQuestion13 = true;
        $this->errorQuestion14 = true;
        $this->errorQuestion15 = true;
        $this->errorQuestion16 = true;
        $this->errorQuestion17 = true;
        $this->errorQuestion18 = true;
        $this->errorQuestion19 = true;


      $contact = $this->validate([
        'question1' => 'required',
        'question2a' => 'nullable',
        'question2b' => 'nullable',
        'question2c' => 'nullable',
        'question2d' => 'nullable',
        'question2e' => 'nullable',
        'question2f' => 'nullable',
        'question3a' => 'nullable',
        'question3b' => 'nullable',
        'question3c' => 'nullable',
        'question3d' => 'nullable',
        'question4' => 'required',
        'question5' => 'required',
        'question6' => 'required',
        'question7' => 'required',
        'question8' => 'required',
        'question9' => 'required',
        'question10' => 'required',
        'question11' => 'required',
        'question12' => 'required',
        'question13' => 'required',
        'question14' => 'required',
        'question15' => 'required',
        'question16' => 'required',
        'question17' => 'required',
        'question18' => 'required',
        'question19' => 'required',
        'comments' => 'nullable',
      ]);

      Contact::create([
    		'question1' => $contact['question1'],
        'question2a' => $contact['question2a'],
        'question2b' => $contact['question2b'],
        'question2c' => $contact['question2c'],
        'question2d' => $contact['question2d'],
        'question2e' => $contact['question2e'],
        'question2f' => $contact['question2f'],
        'question3a' => $contact['question3a'],
        'question3b' => $contact['question3b'],
        'question3c' => $contact['question3c'],
        'question3d' => $contact['question3d'],
        'question4' => $contact['question4'],
        'question5' => $contact['question5'],
        'question6' => $contact['question6'],
        'question7' => $contact['question7'],
        'question8' => $contact['question8'],
        'question9' => $contact['question9'],
        'question10' => $contact['question10'],
        'question11' => $contact['question11'],
        'question12' => $contact['question12'],
        'question13' => $contact['question13'],
        'question14' => $contact['question14'],
        'question15' => $contact['question15'],
        'question16' => $contact['question16'],
        'question17' => $contact['question17'],
        'question18' => $contact['question18'],
        'question19' => $contact['question19'],
        'comments' => $contact['comments']

    	]);

      $this->resetForm();

      $this->flash = true;

      $this->applicable = false;
      //$this->url=;
      //$this->surveyID = $this->surveyID->id;
      //return redirect()->route('services',['theID' => $this->surveyID]);
      //, ['theID'=> $this->surveyID]
     // session(['theID'=> $this->surveyID]);
      //return redirect('/'.app()->getLocale().'/services')->with('status', $this->surveyID);
      //return redirect('/'.app()->getLocale().'/services');//->with('theID', $this->surveyID);
      //return redirect()->to()->with([ => ]);

    }

    private function resetForm(){
      $this->question1 = '';
      $this->question2a = '';
      $this->question2b = '';
      $this->question2c = '';
      $this->question2d = '';
      $this->question2e = '';
      $this->question2f = '';
      $this->question3a = '';
      $this->question3b = '';
      $this->question3c = '';
      $this->question3d = '';
      $this->question4 = '';
      $this->question5 = '';
      $this->question6 = '';
      $this->question7 = '';
      $this->question8 = '';
      $this->question9 = '';
      $this->question10 = '';
      $this->question11 = '';
      $this->question12 = '';
      $this->question13 = '';
      $this->question14 = '';
      $this->question15 = '';
      $this->question16 = '';
      $this->question17 = '';
      $this->question18 = '';
      $this->question19 = '';
      $this->comments = '';


    }

    public function render()
    {

        return view('livewire.contact-form');
    }
}
