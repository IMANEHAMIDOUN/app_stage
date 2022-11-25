<?php

namespace App\Http\Livewire;

use App\Models\Fournisseur;
use Livewire\Component;

class FournisseurShow extends Component
{
    public $nomFournisseur, $prenomFournisseur ,$gsmFournisseur,$emailFournisseur, $fournisseur_id;
    public $search='';
    protected function rules()
    {
        return [
            'nomFournisseur' => 'required|string|min:4',
            'prenomFournisseur' => 'required|string|min:4',
            'gsmFournisseur' => 'required|string|min:10',
            'emailFournisseur' => ['required', 'email'],
        ];
    }
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function saveFournisseur(){
        $validatedData = $this->validate();
        Fournisseur::create($validatedData);
        session()->flash('message','Fournisseur bien ajouté');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function updateFournisseur(){
        $validatedData = $this->validate();
        Fournisseur::where('id',$this->fournisseur_id)->update([
            'nomFournisseur'=>$validatedData['nomFournisseur'],
            'prenomFournisseur'=>$validatedData['prenomFournisseur'],
            'gsmFournisseur'=>$validatedData['gsmFournisseur'],
            'emailFournisseur'=>$validatedData['emailFournisseur']
        ]);
        session()->flash('message','Fournisseur bien modifié');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function editFournisseur(int $fournisseur_id){
        $fournisseur=Fournisseur::find($fournisseur_id);
        if($fournisseur){
            $this->fournisseur_id=$fournisseur->id;
            $this->nomFournisseur=$fournisseur->nomFournisseur;
            $this->prenomFournisseur=$fournisseur->prenomFournisseur;
            $this->gsmFournisseur=$fournisseur->gsmFournisseur;
            $this->emailFournisseur=$fournisseur->emailFournisseur;
        }else{
            return redirect()->to('/fournisseurs');
        }
    }
    public function deleteFournisseur(int $fournisseur_id){
        $this->fournisseur_id=$fournisseur_id;
    }

    public function destroyFournisseur(){
        Fournisseur::find($this->fournisseur_id)->delete();
        session()->flash('message','Fournisseur bien supprimé');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function closeModal(){
        $this->resetInput();
    }
    public function resetInput(){
        $this->nomFournisseur='';
        $this->prenomFournisseur='';
        $this->gsmFournisseur='';
        $this->emailFournisseur='';
   }
    public function render()
    {
        $this->fournisseurs= Fournisseur::where('nomFournisseur','like','%'.$this->search.'%')->orderBy('nomFournisseur','ASC')->get();
        return view('livewire.fournisseur-show',[$this->fournisseurs]);
    }
}
