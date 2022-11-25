<div>

@include('livewire.produitmodal')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           @if(session()->has('message'))
                <h5 class="alert alert-success">{{session('message')}}</h5>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Liste des produits</h4> 
                          <!-- Button trigger modal -->
                          <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="rechercher..."style="width:230px"/>
                            <button type="button" class="btn btn-primary float-end" style="background-color:blue" data-bs-toggle="modal" data-bs-target="#produitModal">
                            Ajouter un produit
                            </button>
                </div>
                <div class="card-body">
                   <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom Produit</th>
                                <th>Qte</th>
                                <th>Catégorie</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produits as $produit)
                                <tr>
                                    <td>{{ $produit->id}}</td>
                                    <td>{{ $produit->nomProduit}}</td>
                                    <td>{{ $produit->qteStock}}</td>
                                    <td>{{ $produit->categorie}}</td>
                                    <td>
                                        <button type="button" style="background-color:green" wire:click="editProduit({{$produit->id}})"  data-bs-toggle="modal" data-bs-target="#updateProduitModal" class="btn btn-success">Modifier</button>
                                        <button type="button" style="background-color:red" wire:click="deleteProduit({{$produit->id}})"  data-bs-toggle="modal" data-bs-target="#deleteProduitModal" class="btn btn-danger">Supprimer</button>
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
