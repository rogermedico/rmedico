<div>

        <h1 class="serif">projects</h1>

    @foreach($projects as $project)
        <p>{{$project->name}}</p>
        @foreach($project->technologies as $technology)
            <span>{{$technology->name}}</span>
        @endforeach

    @endforeach
</div>
