@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>
                <div class="card-body">
                <div class="col-md-6">
                    <a class="btn btn-primary"  href="{{ route('registro') }}">
                        Registrar
                    </a>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
