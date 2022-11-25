<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;

class ProduitShow extends Component
{

    
    public $nomProduit,$qteStock,$categorie,$produit_id;
    public $search='';
    public $produits;
    protected $rules = [
        'nomProduit' => 'required|string',
        'qteStock' => 'required',
        'categorie' => 'required|string',
    ];
    public function update($fields){
         $this->validateOnly($fields);
    }
    public function saveProduit(){
        $validatedData=$this->validate();
        Produit::create($validatedData);
        session()->flash('message','Produit bien ajouté');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function resetInput(){
         $this->nomProduit='';
         $this->qteStock='';
         $this->categorie='';
    }
    public function editProduit(int $produit_id){
        $produit=Produit::find($produit_id);
        if($produit){
            $this->produit_id=$produit->id;
            $this->nomProduit=$produit->nomProduit;
            $this->qteStock=$produit->qteStock;
            $this->categorie=$produit->categorie;
        }else{
            return redirect()->to('/produits');
        }
    }
    public function render()
    {
        $this->produits= Produit::where('nomProduit','like','%'.$this->search.'%')->orderBy('nomProduit','ASC')->get();
        return view('livewire.produit-show',[$this->produits]);
    }
  

    public function closeModal()
    {
        $this->resetInput();
    }
    public function updateProduit(){
        $validatedData = $this->validate();
        Produit::where('id',$this->produit_id)->update([
            'nomProduit'=>$validatedData['nomProduit'],
            'qteStock'=>$validatedData['qteStock'],
            'categorie'=>$validatedData['categorie']
        ]);
        session()->flash('message','Produit bien modifié');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteProduit(int $produit_id){
        $this->produit_id=$produit_id;
    }

    public function destroyProduit(){
        Produit::find($this->produit_id)->delete();
        session()->flash('message','Produit bien supprimé');
        $this->dispatchBrowserEvent('close-modal');
    }
}
