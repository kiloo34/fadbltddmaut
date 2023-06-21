@extends('layouts.myview')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ ucwords(str_replace('_', ' ', $title)) }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.warga.index') }}" class="btn btn-danger">Kembali </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.warga.update', $villager->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>{{ __('Nama') }}</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $villager->name }}" autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Pendidikan') }}</label>
                        <select class="form-control @error('education') is-invalid @enderror" name="education" id="">
                            {{-- <option value="">Pilih Jawaban</option> --}}
                            <option value="{{ $villager->education->id }}">{{ $villager->education->as }}</option>
                            @foreach ($pendidikan as $item)
                            <option value="{{$item->id}}">{{$item->as}}</option>
                            @endforeach
                        </select>
                        @error('education')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Pekerjaan') }}</label>
                        <select class="form-control @error('job') is-invalid @enderror" name="job" id="">
                            {{-- <option value="">Pilih Jawaban</option> --}}
                            <option value="{{ $villager->job->id }}">{{ $villager->job->as }}</option>
                            @foreach ($pekerjaan as $item)
                            <option value="{{$item->id}}">{{$item->as}}</option>
                            @endforeach
                        </select>
                        @error('job')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Jummlah Tanggungan') }}</label>
                        <input type="text" name="dependent" class="form-control @error('dependent') is-invalid @enderror" value="{{ $villager->dependent }}" autocomplete="dependent" autofocus>
                        @error('dependent')
                        <span class="error invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>{{ __('Umur') }}</label>
                        <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ $villager->age }}" autocomplete="age" autofocus>
                        @error('age')
                        <span class="error invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Penghasilan') }}</label>
                        <input type="text" name="earnings" class="form-control @error('earnings') is-invalid @enderror" value="{{ $villager->earnings }}" autocomplete="earnings" autofocus>
                        @error('earnings')
                        <span class="error invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Riwayat Penyakit / Menahun / Difable') }}</label>
                        <input type="text" name="condition" class="form-control @error('condition') is-invalid @enderror" value="{{ $villager->condition }}" autocomplete="condition" autofocus>
                        @error('condition')
                        <span class="error invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary float-right" value="Ubah">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
