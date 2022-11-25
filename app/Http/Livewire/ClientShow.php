<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientShow extends Component
{
    public $nomClient, $prenomClient ,$gsmClient,$emailClient, $client_id;
    public $search='';
    protected function rules()
    {
        return [
            'nomClient' => 'required|string|min:4',
            'prenomClient' => 'required|string|min:4',
            'gsmClient' => 'required|string|min:10',
            'emailClient' => ['required', 'email'],
        ];
    }
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function saveClient(){
        $validatedData = $this->validate();
        Client::create($validatedData);
        session()->flash('message','Client bien ajouté');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function updateClient(){
        $validatedData = $this->validate();
        Client::where('id',$this->client_id)->update([
            'nomClient'=>$validatedData['nomClient'],
            'prenomClient'=>$validatedData['prenomClient'],
            'gsmClient'=>$validatedData['gsmClient'],
            'emailClient'=>$validatedData['emailClient']
        ]);
        session()->flash('message','Client bien modifié');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function editClient(int $client_id){
        $client=Client::find($client_id);
        if($client){
            $this->client_id=$client->id;
            $this->nomClient=$client->nomClient;
            $this->prenomClient=$client->prenomClient;
            $this->gsmClient=$client->gsmClient;
            $this->emailClient=$client->emailClient;
        }else{
            return redirect()->to('/clients');
        }
    }

    public function deleteClient(int $client_id){
        $this->client_id=$client_id;
    }

    public function destroyClient(){
        Client::find($this->client_id)->delete();
        session()->flash('message','Client bien supprimé');
        $this->dispatchBrowserEvent('close-modal');
    }
public function closeModal(){
    $this->resetInput();
}

    public function resetInput(){
        $this->nomClient='';
        $this->prenomClient='';
        $this->gsmClient='';
        $this->emailClient='';
      
   }
    public function render()
    {
        $this->clients= Client::where('nomClient','like','%'.$this->search.'%')->orderBy('nomClient','ASC')->get();
        return view('livewire.client-show',[$this->clients]);
    }
}
