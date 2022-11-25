@extends('layouts.app')
@section('content')

<div>
<livewire:entree-show>
</div>
@endsection

@section('script')
<script>
window.addEventListener('close-modal', event => {
   $('#entreeModal').modal('hide');
   $('#updateEntreeModal').modal('hide');
   $('#deleteEntreeModal').modal('hide');
})
</script>
@endsection