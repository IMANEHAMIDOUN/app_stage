<div>
    @include('livewire.sortiemodal')
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
                <h5 class="alert alert-success">{{session('message')}}</h5>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Table des sorties</h4>
                                            <!-- Button trigger modal -->
                                            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="rechercher..."style="width:230px"/>
                        <button type="button" style="background-color:blue" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#sortieModal">
                        Ajouter une sortie
                        </button>

                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>QTE Sortie</th>
                                <th>Prix Sortie</th>
                                <th>Date Sortie</th>
                                <th>Client</th>
                                <th>Produit</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sorties as $sortie)
                                <tr>
                                    <td>{{ $sortie->id}}</td>
                                    <td>{{ $sortie->qteSortie}}</td>
                                    <td>{{ $sortie->prixSortie}}</td>
                                    <td>{{ $sortie->dateSortie}}</td>
                                    <td>{{ $sortie->nomClient}}</td>
                                    <td>{{ $sortie->nomProduit}}</td>
                                    <td>
                                        <button type="button" style="background-color:green" wire:click="editSortie({{$sortie->id}})"  data-bs-toggle="modal" data-bs-target="#updateSortieModal" class="btn btn-success">Modifier </button>
                                        <button type="button" style="background-color:red" wire:click="deleteSortie({{$sortie->id}})"  data-bs-toggle="modal" data-bs-target="#deleteSortieModal" class="btn btn-danger">Supprimer</button>
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