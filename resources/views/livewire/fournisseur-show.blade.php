<div>
@include('livewire.fournisseurmodal')
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        @if(session()->has('message'))
                <h5 class="alert alert-success">{{session('message')}}</h5>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Table des fournisseurs</h4>
                                            <!-- Button trigger modal -->
                                            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="rechercher..."style="width:230px"/>
                        <button type="button" style="background-color:blue" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#fournisseurModal">
                        Ajouter un fournisseur
                        </button>

                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom Fournisseur</th>
                                <th>Prenom Fournisseur</th>
                                <th>GSM Fournisseur</th>
                                <th>Email Fournisseur</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($fournisseurs as $fournisseur)
                                <tr>
                                    <td>{{ $fournisseur->id}}</td>
                                    <td>{{ $fournisseur->nomFournisseur}}</td>
                                    <td>{{ $fournisseur->prenomFournisseur}}</td>
                                    <td>{{ $fournisseur->gsmFournisseur}}</td>
                                    <td>{{ $fournisseur->emailFournisseur}}</td>
                                    <td>
                                        <button type="button" style="background-color:green" wire:click="editFournisseur({{$fournisseur->id}})"  data-bs-toggle="modal" data-bs-target="#updateFournisseurModal" class="btn btn-success">Modifier</button>
                                        <button type="button" style="background-color:red" wire:click="deleteFournisseur({{$fournisseur->id}})"  data-bs-toggle="modal" data-bs-target="#deleteFournisseurModal" class="btn btn-danger">Supprimer</button>
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