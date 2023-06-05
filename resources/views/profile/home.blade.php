@extends ('layouts.profile')

@section('content')

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col text-center">
            <h1>Profile</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" disabled value="{{Auth::user()->name}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" disabled value="{{Auth::user()->email}}">
            </div>
            <div class="mb-3">
                <label for="pin" class="form-label">Pin</label>
                <input type="number" class="form-control" min="1000" max="9999" name="pin" disabled value="{{Auth::user()->pin}}">
            </div>
        </div>
    </div>
</div>



@endsection