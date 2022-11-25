<div>
@include('livewire.entreemodal')
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        @if(session()->has('message'))
                <h5 class="alert alert-success">{{session('message')}}</h5>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Table des entrees</h4>
                                        <!-- Button trigger modal -->
                                        <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="rechercher..."style="width:230px"/>
                        <button type="button" class="btn btn-primary float-end" style="background-color:blue" data-bs-toggle="modal" data-bs-target="#entreeModal">
                        Ajouter une entrée
                        </button>

                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>QTE Entrée</th>
                                <th>Prix Entrée</th>
                                <th>Date Entrée</th>
                                <th>Fournisseur</th>
                                <th>Produit</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($entrees as $entree)
                                <tr>
                                    <td>{{ $entree->id}}</td>
                                    <td>{{ $entree->qteEntree}}</td>
                                    <td>{{ $entree->prixEntree}}</td>
                                    <td>{{ $entree->dateEntree}}</td>
                                    <td>{{ $entree->nomFournisseur}}</td>
                                    <td>{{ $entree->nomProduit}}</td>
                                    <td>
                                        <button type="button" style="background-color:green" wire:click="editEntree({{$entree->id}})"  data-bs-toggle="modal" data-bs-target="#updateEntreeModal" class="btn btn-success">Modifier</button>
                                        <button type="button" style="background-color:red" wire:click="deleteEntree({{$entree->id}})"  data-bs-toggle="modal" data-bs-target="#deleteEntreeModal" class="btn btn-danger">Supprimer</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">La table est vide</td>
                                </tr>
                            @endforelse
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>