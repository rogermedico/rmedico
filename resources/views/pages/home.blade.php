@extends('main')

@section('main-content')
    <div>
        <h1 class="home-h1">{{__('Do you need a complex web application? ')}}<span class="d-none d-md-inline">{{__('Maybe some special features that common CMS can\'t fulfil? ')}}</span>{{__('A huge DB to efficiently manage? A custom API?')}}</h1>
        <p class="home-h2">{{__('If the answer to at least one of these questions is yes, I\'m your man. I can transform your ideas into a modern and secure web app.')}}</p>
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
        <p class="small muted text-center">{{__('If you need a common and boring WordPress page I can do it as well, so... Drop me a line!')}}</p>
    </div>
@endsection
