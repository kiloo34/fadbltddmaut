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
        <div class="card">
            <div class="card-header">
                <h4>Data Permintaan Obat</h4>
            </div>
            <div class="card-body">
                <form action="#" method="post" id="chart-peramalan">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 float-right">
                            <div class="form-group">
                                <label>{{__('Obat')}}</label>
                                <select name="obat" id="obat" class="form-control"></select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>{{__('Periode Awal ')}}</label>
                                <input type="text" name="awal" id="awal" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>{{__('Periode Akhir')}}</label>
                                <input type="text" name="akhir" id="akhir" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="submit-btn" class="btn btn-primary float-right">{{__("Hitung")}}</button>
                </form>
                <canvas id="chartObat"></canvas>
            </div>
        </div>
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
