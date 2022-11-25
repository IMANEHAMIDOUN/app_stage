@extends('layouts.app')
@section('content')

<div>
    <livewire:sortie-show>
</div>
@endsection


@section('script')

<script>
window.addEventListener('close-modal', event => {
   $('#sortieModal').modal('hide');
   $('#updateSortieModal').modal('hide');
   $('#deleteSortieModal').modal('hide');
})
</script>
@endsection