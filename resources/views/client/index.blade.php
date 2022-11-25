@extends('layouts.app')
@section('content')

<div>
<livewire:client-show>
</div>

@endsection

@section('script')
<script>
window.addEventListener('close-modal', event => {
   $('#clientModal').modal('hide');
   $('#updateClientModal').modal('hide');
   $('#deleteClienteModal').modal('hide');
})
</script>
@endsection