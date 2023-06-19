@extends('layouts.myview')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('Daftar ')}} {{ ucwords(str_replace('_', ' ', $title)) }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.kriteria.create') }}" class="btn btn-primary">
                            {{__('Tambah ')}} 
                            {{ ucwords(str_replace('_', ' ', $title)) }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="criteria" class="table table-striped">
                            <thead>
                                <th>{{__('No')}}</th>
                                <th>{{__('Nama')}}</th>
                                <th>{{__('Alias')}}</th>
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
        $('#criteria').DataTable({
            "language": {
                "emptyTable": "Data Catin Kosong"
            },
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('admin.criteria.all') }}",
            "columns": [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'alias', name: 'alias'},
                {data: 'action', name: 'action'},
            ]
        });

        $('.hapus-kriteria').on('click', function (e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $(this).data("id");
            
            url = url.replace(':id', id);
            $object=$(this);

            console.log(id);
        });

    });
</script>
@endpush

@include('import.datatable')

{{-- // hapus-kriteria
//         var url = $('.hapus').attr('href');
//         var url = "{{ route('obat.destroy', ":id") }}";
//         Swal.fire({
//             title: 'Are you sure?',
//             text: "Yakin ingin menghapus Data Obat ini!",
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             confirmButtonText: 'Ya!'
//         }).then((result) => {
//             if (result.value) {
//                 $.ajax({
//                     url: url,
//                     type: 'DELETE',
//                     data: {id: id},
//                     success: function (response) {
//                         $($object).parents('tr').remove();
//                         Swal.fire({
//                             title: "Data Dihapus!",
//                             text: response.message,
//                             icon: 'success',
//                         });
//                         setTimeout(function () { 
//                             location.reload();
//                         }, 2500)
//                     },
//                     error: function (data) {
//                         Swal.fire({
//                             title: "Data Gagal Dihapus!",
//                             icon: 'error',
//                         })
//                     }
//                 });
//             }
//         }); --}}