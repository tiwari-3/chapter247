@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered" id="orders-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Invoice Number</th>
                <th>Total Amount</th>
                <th>Status</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#orders-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('order.get_data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'invoice_number', name: 'invoice_number' },
            { data: 'total_amount', name: 'total_amount' },
            { data: 'status', name: 'status' }
        ]
    });
});
</script>
@endpush
