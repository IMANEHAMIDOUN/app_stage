<?php

namespace App\Http\Livewire;

use App\Models\Sortie;
use Livewire\Component;

class SortieShow extends Component
{
    public $qteSortie, $prixSortie ,$dateSortie,$nomClient,$nomProduit, $sortie_id;
    public $search='';
    protected function rules()
    {
        return [
            'qteSortie' => 'required',
            'prixSortie' => 'required',
            'dateSortie' => 'required',
            'nomClient'=>'required|string',
            'nomProduit' => 'required'
        ];
    }
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function saveSortie(){
        $validatedData = $this->validate();
        Sortie::create($validatedData);
        session()->flash('message','Sortie bien ajouté');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function updateSortie(){
        $validatedData = $this->validate();
        Sortie::where('id',$this->sortie_id)->update([
            'qteSortie'=>$validatedData['qteSortie'],
            'prixSortie'=>$validatedData['prixSortie'],
            'dateSortie'=>$validatedData['dateSortie'],
            'nomClient'=>$validatedData['nomClient'],
            'nomProduit'=>$validatedData['nomProduit']
        ]);
        session()->flash('message','Sortie bien modifié');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function editSortie(int $sortie_id){
        $sortie=Sortie::find($sortie_id);
        if($sortie){
            $this->sortie_id=$sortie->id;
            $this->qteSortie=$sortie->qteSortie;
            $this->prixSortie=$sortie->prixSortie;
            $this->dateSortie=$sortie->dateSortie;
            $this->nomClient=$sortie->nomClient;
            $this->nomProduit=$sortie->nomProduit;
        }else{
            return redirect()->to('/sorties');
        }
    }

    public function deleteSortie(int $sortie_id){
        $this->sortie_id=$sortie_id;
    }

    public function destroySortie(){
        Sortie::find($this->sortie_id)->delete();
        session()->flash('message','Sortie bien supprimée');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function closeModal(){
        $this->resetInput();
    }
    public function resetInput(){
        $this->qteSortie='';
        $this->prixSortie='';
        $this->dateSortie='';
        $this->nomClient='';
        $this->nomProduit='';
   }
    public function render()
    {
        $this->sorties= Sortie::where('dateSortie','like','%'.$this->search.'%')->orderBy('dateSortie')->get();
        return view('livewire.sortie-show',[$this->sorties]);
    }
}
