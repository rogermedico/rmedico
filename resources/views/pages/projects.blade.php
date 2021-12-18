@extends('main')

@section('main-content')
    <div>
        <h1 class="text-center text-md-left">{{__('successful projects')}}</h1>
        @foreach($projects as $projectsCollection)
            @foreach($projectsCollection as $project)
                @if($loop->first)
                    <h2 class="my-4">{{$project->project_type}}</h2>
                @endif
                <x-project :project="$project"/>
            @endforeach
        @endforeach
    </div>
@endsection
