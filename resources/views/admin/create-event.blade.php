@extends('layouts.admin')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class = "text-center">Create Event</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            {!! Form::open(['action' => ['App\Http\Controllers\EventsController@store'], 'files' => true, 'method' => 'POST']) !!}
                <div class="row d-flex gap-3 justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title...">
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="mb-3">
                            <label for="event_date" class="form-label">Date</label>
                            <input type="date" class="form-control" name="event_date">
                        </div>
                    </div>
                </div>
                <div class="row d-flex gap-3 justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="mb-3">
                            <label for="start_time" class="form-label">Start Time</label>
                            <input type="time" class="form-control" step="0.5" name="start_time">
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="mb-3">
                            <label for="duration" class="form-label">Expected Duration (hours)</label>
                            <input type="number" class="form-control" step="0.5" name="duration" placeholder="Event Duration...">
                        </div>
                    </div>
                </div>
                <div class="row d-flex gap-3 justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="mb-3">
                            <label for="max_attendees" class="form-label">Max Attendees</label>
                            <input type="number" class="form-control" name="max_attendees" min="1" value="50" placeholder="Max attendees...">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="mb-3">
                            <label for="summary" class="form-label">Summary</label>
                            <textarea class="form-control" name="summary" id="summary" rows="5" placeholder="Summary..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="mb-3">
                            <label for="event_img" class="form-label">Event Image</label>
                            <input class="form-control" name="event_img" type="file" id="formFile">
                        </div>
                    </div>
                </div>

                <div class = "text-center py-5">
                    {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>



@endsection