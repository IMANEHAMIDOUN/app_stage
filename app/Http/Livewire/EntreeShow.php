<?php

namespace App\Http\Livewire;

use App\Models\Entree;
use Livewire\Component;

class EntreeShow extends Component
{
    public $qteEntree, $prixEntree ,$dateEntree,$nomFournisseur,$nomProduit, $entree_id;
    public $search='';
    protected function rules()
    {
        return [
            'qteEntree' => 'required|string',
            'prixEntree' => 'required|string',
            'dateEntree' => 'required|string',
            'nomFournisseur'=> 'required|string',
            'nomProduit' => 'required|string'
        ];
    }
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function saveEntree(){
        $validatedData = $this->validate();
        Entree::create($validatedData);
        session()->flash('message','Entrée bien ajoutée');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }
    public function updateEntree(){
        $validatedData = $this->validate();
        Entree::where('id',$this->entree_id)->update([
            'qteEntree'=>$validatedData['qteEntree'],
            'prixEntree'=>$validatedData['prixEntree'],
            'dateEntree'=>$validatedData['dateEntree'],
            'nomFournisseur'=>$validatedData['nomFournisseur'],
            'nomProduit'=>$validatedData['nomProduit']
        ]);
        session()->flash('message','Entree bien modifié');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function editEntree(int $entree_id){
        $entree=Entree::find($entree_id);
        if($entree){
            $this->entree_id=$entree->id;
            $this->qteEntree=$entree->qteEntree;
            $this->prixEntree=$entree->prixEntree;
            $this->dateEntree=$entree->dateEntree;
            $this->nomFournisseur=$entree->nomFournisseur;
            $this->nomProduit=$entree->nomProduit;
        }else{
            return redirect()->to('/entrees');
        }
    }

    public function deleteEntree(int $entree_id){
        $this->entree_id=$entree_id;
    }

    public function destroyEntree(){
        Entree::find($this->entree_id)->delete();
        session()->flash('message','Entrée bien supprimée');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function closeModal(){
        $this->resetInput();
    }
    public function resetInput(){
        $this->qteEntree='';
        $this->prixEntree='';
        $this->dateEntree='';
        $this->nomFournisseur='';
        $this->nomProduit='';
   }
    public function render()
    {
        $this->entrees= Entree::where('dateEntree','like','%'.$this->search.'%')->orderBy('dateEntree')->get();
        return view('livewire.entree-show',[$this->entrees]);
    }
}
