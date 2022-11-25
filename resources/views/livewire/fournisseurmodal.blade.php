
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="fournisseurModal" tabindex="-1" aria-labelledby="fournisseurLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fournisseurModalLabel">Ajout d'un fournisseur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="saveFournisseur">
            <div class="modal-body">
                <div class="mb-3">
                    <label >Nom Fournisseur</label>
                    <input type="text"  wire:model="nomFournisseur" class="form-control">
                    @error('nomFournisseur') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Prenom Fournisseur</label>
                    <input type="text"  wire:model="prenomFournisseur" class="form-control">
                    @error('prenomFournisseur') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >GSM Fournisseur</label>
                    <input type="text"  wire:model="gsmFournisseur" class="form-control">
                    @error('gsmFournisseur') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Email Fournisseur</label>
                    <input type="text"  wire:model="emailFournisseur" class="form-control">
                    @error('emailFournisseur') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color:grey" data-bs-dismiss="modal" wire:click="closeModal" >Quitter</button>
                <button type="submit" class="btn btn-primary" style="background-color:blue" >Sauvgarder</button>
            
            </div>
    </form>
    </div>
  </div>
</div>


<!-- update Modal -->
<div wire:ignore.self class="modal fade" id="updateFournisseurModal" tabindex="-1" aria-labelledby="updateFournisseurLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateFournisseurModalLabel">Modifier fournisseur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="updateFournisseur">
            <div class="modal-body">
                <div class="mb-3">
                    <label >Nom Fournisseur</label>
                    <input type="text"  wire:model="nomFournisseur" class="form-control">
                    @error('nomFournisseur') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Prenom Fournisseur</label>
                    <input type="text"  wire:model="prenomFournisseur" class="form-control">
                    @error('prenomFournisseur') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >GSM Fournisseur</label>
                    <input type="text"  wire:model="gsmFournisseur" class="form-control">
                    @error('gsmFournisseur') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Email Fournisseur</label>
                    <input type="text"  wire:model="emailFournisseur" class="form-control">
                    @error('emailFournisseur') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color:grey" wire:click="closeModal" data-bs-dismiss="modal">Quitter</button>
                <button type="submit" class="btn btn-success" style="background-color:green">Modifier</button>
            
            </div>
    </form>
    </div>
  </div>
</div>


<!-- delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteFournisseurModal" tabindex="-1" aria-labelledby="deleteFournisseurModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteFournisseurModalLabel">Suppression d'un fournisseur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
      </div>
      <form wire:submit.prevent="destroyFournisseur">
            <div class="modal-body">
            <h4>Vous êtes sûr vous voulez supprimer ce fournisseur?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" style="background-color:grey" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Quitter</button>
                <button type="submit" style="background-color:red" class="btn btn-danger">Oui!</button>
            
            </div>
    </form>
    </div>
  </div>
</div>