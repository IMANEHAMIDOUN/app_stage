@extends('layouts.app')
@section('content')

<div>
<livewire:fournisseur-show> 
</div>
@endsection

@section('script')
<script>
window.addEventListener('close-modal', event => {
   $('#fournisseurModal').modal('hide');
   $('#updateFournisseurModal').modal('hide');
   $('#deleteFournisseurModal').modal('hide');
})
</script>
@endsection