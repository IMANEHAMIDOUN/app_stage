<div>
@include('livewire.clientmodal')

   <div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
                <h5 class="alert alert-success">{{session('message')}}</h5>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Table des clients</h4>
                    <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="rechercher..."style="width:230px"/>
                    <!-- Button trigger modal -->
                        <button type="button" style="background-color:blue"class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#clientModal">
                        Ajouter un client
                        </button>

                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom Client</th>
                                <th>Prenom Client</th>
                                <th>GSM Client</th>
                                <th>Email Client</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clients as $client)
                                <tr>
                                    <td>{{ $client->id}}</td>
                                    <td>{{ $client->nomClient}}</td>
                                    <td>{{ $client->prenomClient}}</td>
                                    <td>{{ $client->gsmClient}}</td>
                                    <td>{{ $client->emailClient}}</td>
                                    <td>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#updateClientModal"  wire:click="editClient({{$client->id}})" class="btn btn-success" style="background-color:green">Modifier</a>
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#deleteClientModal" wire:click="deleteClient({{$client->id}})"  class="btn btn-danger"style="background-color:red">Supprimer</a>
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
