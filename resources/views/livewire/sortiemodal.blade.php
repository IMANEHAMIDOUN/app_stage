
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="sortieModal" tabindex="-1" aria-labelledby="sortieModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sortieModalLabel">Ajout d'une sortie </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="saveSortie">
            <div class="modal-body">
                <div class="mb-3">
                    <label >Qte Sortie</label>
                    <input type="text"  wire:model="qteSortie" class="form-control">
                    @error('qteSortie') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Prix de Sortie</label>
                    <input type="text"  wire:model="prixSortie" class="form-control">
                    @error('prixSortie') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Date de Sortie</label>
                    <input type="text"  wire:model="dateSortie" class="form-control">
                    @error('dateSortie') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Nom client</label>
                    <input type="text"  wire:model="nomClient" class="form-control">
                    @error('nomClient') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Nom produit</label>
                    <input type="text"  wire:model="nomProduit" class="form-control">
                    @error('nomProduit') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color:grey" data-bs-dismiss="modal" wire:click="closeModal">Quitter</button>
                <button type="submit" class="btn btn-primary" style="background-color:blue">Sauvgarder</button>
            
            </div>
    </form>
    </div>
  </div>
</div>


<!--update Modal -->
<div wire:ignore.self class="modal fade" id="updateSortieModal" tabindex="-1" aria-labelledby="updateSortieModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateSortieModalLabel">Modifier sortie </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="updateSortie">
            <div class="modal-body">
                <div class="mb-3">
                    <label >Qte Sortie</label>
                    <input type="text"  wire:model="qteSortie" class="form-control">
                    @error('qteSortie') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Prix de Sortie</label>
                    <input type="text"  wire:model="prixSortie" class="form-control">
                    @error('prixSortie') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Date de Sortie</label>
                    <input type="text"  wire:model="dateSortie" class="form-control">
                    @error('dateSortie') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Nom client</label>
                    <input type="text"  wire:model="nomClient" class="form-control">
                    @error('nomClient') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Nom produit</label>
                    <input type="text"  wire:model="nomProduit" class="form-control">
                    @error('nomProduit') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color:grey" wire:click="closeModal" data-bs-dismiss="modal">Quitter</button>
                <button type="submit" class="btn btn-primary" style="background-color:blue">Modifier</button>
            
            </div>
    </form>
    </div>
  </div>
</div>



<!-- delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteSortieModal" tabindex="-1" aria-labelledby="deleteSortieModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteSortieModalLabel">Suppression d'une sortie de marchandises</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
      </div>
      <form wire:submit.prevent="destroySortie">
            <div class="modal-body">
            <h4>Vous êtes sûr vous voulez supprimer cette sortie de marchandise?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" style="background-color:grey" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Quitter</button>
                <button type="submit" style="background-color:blue" class="btn btn-primary">Oui!</button>
            
            </div>
    </form>
    </div>
  </div>
</div>