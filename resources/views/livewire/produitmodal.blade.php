
<!-- add Modal -->
<div wire:ignore.self class="modal fade" id="produitModal" tabindex="-1" aria-labelledby="produitModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="produitModalLabel">Ajout d'un produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="saveProduit">
        <div class="modal-body">
        <label >Nom Produit</label>
        <input type="text" wire:model="nomProduit" class="form-control">
        @error('nomProduit') <span class="text-danger">{{ $message }}</span> @enderror
         </div>
         <div class="modal-body">
        <label >Qte stock</label>
        <input type="text" wire:model="qteStock" class="form-control">
        @error('qteStock') <span class="text-danger">{{ $message }}</span> @enderror
         </div>
         <div class="modal-body">
        <label >Categorie</label>
        <input type="text" wire:model="categorie" class="form-control">
        @error('categorie') <span class="text-danger">{{ $message }}</span> @enderror
         </div>
        
       
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" style="background-color:grey" wire:click="closeModal" data-bs-dismiss="modal">Quitter</button>
            <button type="submit" class="btn btn-primary" style="background-color:blue">Sauvgarder</button>
        </div>
    </form>
    </div>
  </div>
</div>


<!-- update Modal -->
<div wire:ignore.self class="modal fade" id="updateProduitModal" tabindex="-1" aria-labelledby="updateProduitModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateProduitModalLabel">Ajout d'un produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"  aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="updateProduit">
        <div class="modal-body">
        <label >Nom Produit</label>
        <input type="text" wire:model="nomProduit" class="form-control">
        @error('nomProduit') <span class="text-danger">{{ $message }}</span> @enderror
         </div>
         <div class="modal-body">
        <label >Qte stock</label>
        <input type="text" wire:model="qteStock" class="form-control">
        @error('qteStock') <span class="text-danger">{{ $message }}</span> @enderror
         </div>
         <div class="modal-body">
        <label >Categorie</label>
        <input type="text" wire:model="categorie" class="form-control">
        @error('categorie') <span class="text-danger">{{ $message }}</span> @enderror
         </div>
        
       
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"style="background-color:grey"  wire:click="closeModal" data-bs-dismiss="modal">Quitter</button>
            <button type="submit" class="btn btn-sucess" style="background-color:green">Modifier</button>
        </div>
    </form>
    </div>
  </div>
</div>


<!-- delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteProduitModal" tabindex="-1" aria-labelledby="deleteProduitModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteProduitModalLabel">Suppression d'un produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
      </div>
      <form wire:submit.prevent="destroyProduit">
            <div class="modal-body">
            <h4>Vous êtes sûr vous voulez supprimer ce produit?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color:grey" data-bs-dismiss="modal" wire:click="closeModal">Quitter</button>
                <button type="submit" class="btn btn-danger" style="background-color:red">Oui!</button>
            
            </div>
    </form>
    </div>
  </div>
</div>