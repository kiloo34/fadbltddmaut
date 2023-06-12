@extends('layouts.myview')
@section('content')
<div class="row">
    {{-- @include('components.infobox', ['col'=>'col-md-4 col-sm-6', 'icon'=>'user', 'isi'=>count($kecamatan),
    'judul'=>'kecamatan', 'link'=>route('kecamatan.index')])
    @include('components.infobox', ['col'=>'col-md-4 col-sm-6', 'icon'=>'clock', 'isi'=>count($periode),
    'judul'=>'periode', 'link'=>route('periode.index')]) --}}
</div>
<div class="row">
    <div class="col-md-6 col-md-12">
    </div>
</div>
@endsection
@push('scripts')
<script>
    var chartData = [];
    var chartLabel = [];
</script>
@endpush
@include('import.chartjs')
@include('import.select2')
@include('import.datepicker')
