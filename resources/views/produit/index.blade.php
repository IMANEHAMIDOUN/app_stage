@extends('layouts.app')

@section('content')

<div>
    <livewire:produit-show>
</div>
@endsection
@section('script')
<script>
window.addEventListener('close-modal', event => {
    $('#produitModal').modal('hide');
    $('#updateProduitModal').modal('hide');
    $('#deleteProduitModal').modal('hide');
})
</script>
@endsection