
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="clientModal" tabindex="-1" aria-labelledby="clientModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="clientModalLabel">Ajout d'un client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="saveClient">
            <div class="modal-body">
                <div class="mb-3">
                    <label >Nom Client</label>
                    <input type="text"  wire:model="nomClient" class="form-control">
                    @error('nomClient') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Prenom Client</label>
                    <input type="text"  wire:model="prenomClient" class="form-control">
                    @error('prenomClient') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >GSM Client</label>
                    <input type="text"  wire:model="gsmClient" class="form-control">
                    @error('gsmClient') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Email Client</label>
                    <input type="text"  wire:model="emailClient" class="form-control">
                    @error('emailClient') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color:grey"wire:click="closeModal" data-bs-dismiss="modal">Quitter</button>
                <button type="submit" class="btn btn-primary"style="background-color:blue">Sauvgarder</button>
            
            </div>
    </form>
    </div>
  </div>
</div>



<!-- update Modal -->
<div wire:ignore.self class="modal fade" id="updateClientModal" tabindex="-1" aria-labelledby="updateClientModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateClientModalLabel">Modification d'un client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
      </div>
      <form wire:submit.prevent="updateClient">
            <div class="modal-body">
                <div class="mb-3">
                    <label >Nom Client</label>
                    <input type="text"  wire:model="nomClient" class="form-control">
                    @error('nomClient') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Prenom Client</label>
                    <input type="text"  wire:model="prenomClient" class="form-control">
                    @error('prenomClient') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >GSM Client</label>
                    <input type="text"  wire:model="gsmClient" class="form-control">
                    @error('gsmClient') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label >Email Client</label>
                    <input type="text"  wire:model="emailClient" class="form-control">
                    @error('emailClient') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color:grey"data-bs-dismiss="modal" wire:click="closeModal">Quitter</button>
                <button type="submit" class="btn btn-success"style="background-color:green">Modifier</button>
            
            </div>
    </form>
    </div>
  </div>
</div>

<!-- delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteClientModal" tabindex="-1" aria-labelledby="deleteClientModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteClientModalLabel">Suppression d'un client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
      </div>
      <form wire:submit.prevent="destroyClient">
            <div class="modal-body">
            <h4>Vous êtes sûr vous voulez supprimer ce client?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="background-color:grey"data-bs-dismiss="modal" wire:click="closeModal">Quitter</button>
                <button type="submit" class="btn btn-danger"style="background-color:red">Oui!</button>
            
            </div>
    </form>
    </div>
  </div>
</div>