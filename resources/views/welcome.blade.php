@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right"> ברוכים הבאים למערכת רישום התרומות </div>
                <div class="card-body text-center">
                <div class="col">
                    <a class="btn" style="background-color: #06195E; color: #FFFFFF"  href="{{ route('registro') }}">
                        התחל לרשום  
                    </a>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
