@extends('layouts.myview')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('Daftar ')}} {{ ucwords(str_replace('_', ' ', $title)) }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.warga.create') }}" class="btn btn-primary">
                            {{__('Tambah ')}} 
                            {{ ucwords(str_replace('_', ' ', $title)) }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="village" class="table table-striped">
                            <thead>
                                <th>{{__('No')}}</th>
                                <th>{{__('Nama')}}</th>
                                <th>{{__('Umur')}}</th>
                                <th>{{__('Jumlah Tanggungan')}}</th>
                                <th>{{__('Pekerjaan')}}</th>
                                <th>{{__('Penghasilan')}}</th>
                                <th>{{__('Pendidikan Terakhir')}}</th>
                                <th>{{__('Sakti Kronis / Menahun / Difabel')}}</th>
                                <th>{{__('Aksi')}}</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#village').DataTable({
            "language": {
                "emptyTable": "Data Penduduk Desa Kosong"
            },
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('admin.villager.all') }}",
            "columns": [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'age', name: 'age'},
                {data: 'dependent', name: 'dependent'},
                {data: 'job', name: 'job'},
                {data: 'earnings', name: 'earnings'},
                {data: 'education', name: 'education'},
                {data: 'condition', name: 'condition'},
                {data: 'action', name: 'action'},
                
            ]
        });
    });
</script>
@endpush

@include('import.datatable')