@extends('layouts.master')
@section('content')

<h3>Users</h3>
<br>      
    <table class="table table-bordered table-striped" id="userDatatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>@lang('user.weight')</th>
                <th>@lang('user.height')</th>
                <th>@lang('user.imc')</th>
                <th>@lang('user.result')</th>
                <th>@lang('user.created_at')</th>
            </tr>
        </thead>
    </table>

@endsection

@section('script')
<script>
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#userDatatable').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            ajax: "{{ route('user.showHistorical') }}",
            columns: [
                        {data: 'id', name: 'id' },
                        { data: 'weight', name: 'weight' },
                        { data: 'height', name: 'height' },
                        { data: 'imc', name: 'imc' },
                        { data: 'result', name: 'result' },
                        { data: 'created_at', name: 'created_at' },
                    ],
            order: [[0, 'desc']]
            });
        });         
</script>
@endsection