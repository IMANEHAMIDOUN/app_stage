

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="entreeModal" tabindex="-1" aria-labelledby="entreeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="entreeModalLabel">Ajout d'une entrée</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="saveEntree">
            <div class="modal-body">
                <div class="mb-3">
                    <label >Qte Entrée</label>
                    <input type="text"  wire:model="qteEntree" class="form-control">
                    @error('qteEntree') <span class="text-dangerr">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Prix d'entrée</label>
                    <input type="text"  wire:model="prixEntree" class="form-control">
                    @error('prixEntree') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Date d'entrée</label>
                    <input type="text"  wire:model="dateEntree" class="form-control">
                    @error('dateEntree') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Nom fournisseur</label>
                    <input type="text"  wire:model="nomFournisseur" class="form-control">
                    @error('nomFournisseur') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Nom produit</label>
                    <input type="text"  wire:model="nomProduit" class="form-control">
                    @error('nomProduit') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal"style="background-color:grey" >Quitter</button>
                <button type="submit" class="btn btn-primary"style="background-color:blue">Sauvgarder</button>

            </div>
    </form>
    </div>
  </div>
</div>



<!-- delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteEntreeModal" tabindex="-1" aria-labelledby="deleteEntreeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteEntreeModalLabel">Suppression d'une Entree de marchandises</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
      </div>
      <form wire:submit.prevent="destroyEntree">
            <div class="modal-body">
            <h4>Vous êtes sûr vous voulez supprimer cet entrée du stock?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal"style="background-color:grey">Quitter</button>
                <button type="submit" class="btn btn-danger"style="background-color:red">Oui!</button>

            </div>
    </form>
    </div>
  </div>
</div>




<!--update Modal -->
<div wire:ignore.self class="modal fade" id="updateEntreeModal" tabindex="-1" aria-labelledby="updateEntreeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateEntreeModalLabel">Modifier entree </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="updateEntree">
            <div class="modal-body">
                <div class="mb-3">
                    <label >Qte Entree</label>
                    <input type="text"  wire:model="qteEntree" class="form-control">
                    @error('qteEntree') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Prix Entree</label>
                    <input type="text"  wire:model="prixEntree" class="form-control">
                    @error('prixEntree') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Date de entree</label>
                    <input type="text"  wire:model="dateEntree" class="form-control">
                    @error('dateEntree') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Nom fournisseur</label>
                    <input type="text"  wire:model="nomFournisseur" class="form-control">
                    @error('nomFournisseur') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Nom produit</label>
                    <input type="text"  wire:model="nomProduit" class="form-control">
                    @error('nomProduit') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal"style="background-color:grey">Quitter</button>
                <button type="submit" class="btn btn-success" style="background-color:green">Modifier</button>

            </div>
    </form>
    </div>
  </div>
</div>
