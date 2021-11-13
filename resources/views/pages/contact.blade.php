<div>
    <h1 class="serif">contact</h1>
    <p>If you have something to tell me or just want to be in touch just fill the form and hit send...</p>
        @if(session('message'))
            <div class='alert alert-success'>
                {{ session('message') }}
            </div>
        @else
        <div class="offset-lg-2 col-lg-8 p-0">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="needs-validation" novalidate method="POST" action="{{route('contactPost')}}">
                {{ csrf_field() }}
                <div class="d-md-flex flex-md-row">
                <div class="form-group flex-md-grow-1 mr-md-3">
                    <label class="sr-only" for="name">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        placeholder="John Smith"
                        name="name"
                        required
                    >
                </div>
                <div class="form-group flex-md-grow-1">
                    <label class="sr-only" for="email">Email</label>
                    <input
                        type="email"
                        class="email form-control"
                        id="email"
                        placeholder="example@gmail.com"
                        name="email"
                        pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$"
                        required
                    >
                </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="message">Message</label>
                    <textarea
                        type="text"
                        class="form-control"
                        id="message"
                        placeholder="What you want to say..."
                        name="message"
                        rows="10"
                        required
                    ></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary" value="Send">send message</button>
                </div>

            </form>
        </div>
    @endif
</div>
