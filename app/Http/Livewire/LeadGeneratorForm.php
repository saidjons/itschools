<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use SergiX44\Nutgram\Nutgram;

class LeadGeneratorForm extends Component
{
    public $count=0;
    public $fname,$lname,$email,$phone,$age;



    protected $rules = [
        'fname' => 'required|min:4',
        'lname' => 'required|string',
        'phone' => 'required|numeric',
        'age' => 'required|numeric|lt:40|gt:13',

        'email' => 'email|required',
    ];
    public function submit()
    {
        // dd($this->fname,$this->lname,$this->email,$this->phone,$this->age);
        $this->validate();

        // Execution doesn't reach here if validation fails.
        $check=Contact::where('email',$this->email)->orWhere('phone',$this->phone)->get();
        if (count($check)==0) {
            Contact::create([
                'fname' => $this->fname,
                'email' => $this->email,
                'lname' => $this->lname,
                'phone' => $this->phone,
                'age' => $this->age,
                
                ]);
                session()->flash('success', "Ma'lumotlaringiz muvaqqaiyatli saqlandi. ");
                $bot = app(Nutgram::class); // also app('nutgram') is a valid alias
                // $bot->onMessage(function (Nutgram $bot) {
                    
                $message = $bot->sendMessage('user created :'.$this->fname.$this->age.$this->phone, ['chat_id' =>'1289432718']);
            }else{
                session()->flash('message', "Email yoki telefon bazada ro'yhatdan o'tgan.");

            }


    }

    
    public function render()
    {
        return view('livewire.lead-generator-form')
        ->layout('layouts.livewire');
    }
}
