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
                <form action="#">
                    <div class="form-group">
                        <label>{{ __('Nama') }}</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ $villager->name }}" autocomplete="name" autofocus readonly>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Sebagai') }}</label>
                        <input name="as" type="text" class="form-control @error('as') is-invalid @enderror"
                            value="{{ $villager->as }}" autocomplete="as" autofocus readonly>
                        @error('as')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Nilai') }}</label>
                        <input name="value" type="text" class="form-control @error('value') is-invalid @enderror"
                            value="{{ $villager->value }}" autocomplete="value" autofocus readonly>
                        @error('value')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
