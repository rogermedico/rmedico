@extends('main')

@section('main-content')
    <div>
        <h1 class="home-h1">{{__('You need a complex web application? ')}}<span class="d-none d-md-inline">{{__('Maybe some special features that common CMS can\'t fulfill? ')}}</span>{{__('A huge DB to efficiently manage? A custom API?')}}</h1>
        <p class="home-h2">{{__('If the response to at last one of that questions is yes, contact me. I can transform your thoughts into a modern and secure web app.')}}</p>
        <div class="d-flex align-items-center justify-content-around mb-3 mb-sm-5">
            <div class="col-md-2">
            <img class="img-fluid" src="{{asset('storage/logos/angular.png')}}" alt="Angular">
            </div>
            <div class="col-md-2">
            <img class="img-fluid" src="{{asset('storage/logos/angular-material.png')}}" alt="Angular Material">
            </div>
            <div class="col-md-2">
            <img class="img-fluid" src="{{asset('storage/logos/bootstrap.png')}}" alt="Bootstrap">
            </div>
            <div class="col-md-2">
            <img class="img-fluid" src="{{asset('storage/logos/tailwind.png')}}" alt="Tailwind">
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-around mb-5">
            <div class="col-1"></div>
            <div class="col-3 col-md-2">
                <img class="img-fluid" src="{{asset('storage/logos/laravel.png')}}" alt="Laravel">
            </div>
            <div class="col-3 col-md-2">
                <img class="img-fluid" src="{{asset('storage/logos/php8.png')}}" alt="PHP">
            </div>
            <div class="col-3 col-md-2">
                <img class="img-fluid" src="{{asset('storage/logos/mysql.png')}}" alt="MySQL">
            </div>
            <div class="col-1"></div>
        </div>
        <p class="small muted text-center">{{__('If you need a common and boring wordpress page I can do it as well, so... CONTACT CONTACT!')}}</p>
    </div>
@endsection
