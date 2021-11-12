<div>
    <h1>projects</h1>
    @foreach($projects as $project)
        <div class="card mb-3">
            <div class="row no-gutters">
                @if (file_exists(public_path('storage/projects/' . $project->id . '/snapshot.png')))
                    <div class="col-lg-5">
                        <img class="img-fluid p-2 d-block align-middle" src="{{asset('storage/projects/' . $project->id . '/snapshot.png')}}" alt="Snapshot of the project">
                    </div>
                @endif

                <div class="col-lg-7">
                    <div class="card-body">
                        <div>
                            <h2 class="card-title">{{$project->name}}</h2>
                            <div class="card-text">{!!$project->body!!}</div>
                        </div>
                        <div class="mb-3 h-100">
                        @foreach($project->technologies as $technology)
                            <span class="badge badge-secondary">{{$technology->name}}</span>
                        @endforeach
                        </div>
                        <div class="text-center text-md-right">
                            <a href="{{$project->link}}">
                                <button type="button" class="btn btn-primary">
                                    {{$project->link}}
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p></p>
    @endforeach
</div>
