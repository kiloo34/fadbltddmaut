@extends('layouts.myview')
@section('title')
    {{__('Catin')}}{{ isset($subtitle) ? ' | ' . ucfirst($subtitle) : '' }}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ucfirst($subtitle)}} {{__('Data Kriteria')}} {{ucfirst($warga->name)}}
                </h3>
            </div>
            <form action="{{ route('admin.warga.storeKriteriaVal', $warga->id) }}" class="form-horizontal" method="post">
                @csrf
                <div class="card-body">
                    @foreach ($criterias as $kriteria)
                    <input type="hidden" name="id[{{$kriteria->id}}]" value="{{ $kriteria->id }}">
                    <div class="form-group row">
                        <label for="catinName" class="col-sm-2 col-form-label">{{ucfirst($kriteria->as)}}</label>
                        @if ($kriteria->name == 'pekerjaan')
                        <div class="col-sm-10">
                            <select class="form-control @error($kriteria->name) is-invalid @enderror" name="name[{{$kriteria->id}}]" >
                                {{-- <option value="">Pilih Jawaban</option> --}}
                                <option value="{{ $warga->job->id }}">{{ $warga->job->as }}</option>
                                @foreach ($job as $item)
                                <option value="{{$item->id}}">{{$item->as}}</option>
                                @endforeach
                            </select>
                        </div>
                        @elseif($kriteria->name == 'pendidikan')
                        <div class="col-sm-10">
                            <select class="form-control @error($kriteria->name) is-invalid @enderror" name="name[{{$kriteria->id}}]" id="">
                                {{-- <option value="">Pilih Jawaban</option> --}}
                                <option value="{{ $warga->education->id }}">{{ $warga->education->as }}</option>
                                @foreach ($pendidikan as $item)
                                <option value="{{$item->id}}">{{$item->as}}</option>
                                @endforeach
                            </select>
                        </div>
                        @elseif($kriteria->name == 'jumlah_tanggungan')
                        <div class="col-sm-10">
                            <input type="text" name="name[{{$kriteria->id}}]" class="form-control @error($kriteria->name) is-invalid @enderror" placeholder="{{ ucfirst($warga->dependent) }}" value="{{ $warga->dependent }}">
                            @error($kriteria->name)
                            <span class="error invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @elseif($kriteria->name == 'umur')
                        <div class="col-sm-10">
                            <input type="text" name="name[{{$kriteria->id}}]" class="form-control @error($kriteria->name) is-invalid @enderror" placeholder="{{ ucfirst($warga->age) }}" value="{{ $warga->age }}">
                            @error($kriteria->name)
                            <span class="error invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @elseif($kriteria->name == 'penghasilan')
                        <div class="col-sm-10">
                            <input type="text" name="name[{{$kriteria->id}}]" class="form-control @error($kriteria->name) is-invalid @enderror" placeholder="{{ ucfirst($warga->earnings) }}" value="{{ $warga->earnings }}">
                            @error($kriteria->name)
                            <span class="error invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @elseif($kriteria->name == 'riwayat_penyakit')
                        <div class="col-sm-10">
                            <input type="text" name="name[{{$kriteria->id}}]" class="form-control @error($kriteria->name) is-invalid @enderror" placeholder="{{ ucfirst($warga->condition) }}" value="{{ $warga->condition }}">
                            @error($kriteria->name)
                            <span class="error invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @else
                        <div class="col-sm-10">
                            <input type="text" name="name[{{$kriteria->id}}]" class="form-control @error($kriteria->name) is-invalid @enderror" placeholder="{{ ucfirst($kriteria->name) }}" value="{{ old($kriteria->name) }}">
                            @error($kriteria->name)
                            <span class="error invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.warga.index') }}" class="btn btn-danger btn-sm">Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm float-right">{{__('Tambah Data')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- url: '{{ route("penyuluh.countAge") }}', --}}
@endsection
@push('scripts')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> --}}
@endpush