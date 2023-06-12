@extends ('layouts.standard')

@section('content')

<div class="container-fluid">
    <div class="row bg-dark border-top p-3 border-secondary">
        <div class="col">
            <h1 class="text-center mb-3 text-primary">Inkwell Library</h1>
            <h3 class="text-center mb-5 text-white">Events</h3>
        </div>
    </div>
</div>

<section class="container">
    <div class="row p-3 mb-3">
        <div class="col">
            <h1 class="text-center display-3 fw-bold mt-3">Upcoming Events</h1>
        </div>
    </div>
    @foreach($upcoming_events as $event)
        @if(($loop->index % 2) == 0)
        <!--Image left | Text right-->
        <div class="row">
            <!--Mobile-->
            <section class="container-fluid d-lg-none" style="padding: 0;">
                <div class="row d-flex justify-content-center">
                    <div class="col-11 col-lg-6 d-flex justify-content-center mb-3">
                        <img src="/images/events/{{$event->img}}" alt="" class="w-75 border border-dark">
                    </div>
                    <div class="col-11 col-lg-6 text-white bg-dark p-3">
                        <h2 class="text-center mb-3 px-3">{{$event->title}}</h2>
                        <p class="">{{$event->summary}}</p>
                        <div class="text-center">
                            <button class="btn btn-primary">Reserve Your Spot</button>
                        </div>
                    </div>
                </div>
            </section>

            <!--Desktop-->
            <section class="container-fluid d-none d-lg-flex justify-content-center py-5" style="height: 75vh; padding:0;">
                <div class="row position-relative w-100" style="padding: 0; max-width: 1150px;">
                    <div class="position-absolute mask border border-dark text-white w-50 h-auto p-3 top-0 end-0 rounded" style="z-index: 5; background-color: rgba(7,7,7,.8)">
                        <h2 class="text-center mb-3 px-3">{{$event->title}}</h2>
                        <p class="">{{$event->summary}}</p>
                        <div class="text-center">
                            <button class="btn btn-primary">Reserve Your Spot</button>
                        </div>
                    </div>
                    <div class="position-absolute bg-success w-75 h-75 bottom-0 start-0" style="padding:0;">
                        <img src="/images/events/{{$event->img}}" alt="" class="w-100 h-100 border border-dark rounded">
                    </div>
                </div>
            </section>
        </div>
        @else
        <!--Text left | Image right-->
        <div class="row">
            <!--Mobile-->
            <section class="container-fluid d-lg-none" style="padding: 0;">
                <div class="row d-flex justify-content-center">
                    <div class="col-11 col-lg-6 d-flex justify-content-center mb-3">
                        <img src="/images/events/{{$event->img}}" alt="" class="w-75 border border-dark">
                    </div>
                    <div class="col-11 col-lg-6 text-white bg-dark p-3">
                        <h2 class="text-center mb-3">{{$event->title}}</h2>
                        <p class="">{{$event->summary}}</p>
                        <div class="text-center">
                            <button class="btn btn-primary">Reserve Your Spot</button>
                        </div>
                    </div>
                </div>
            </section>

            <!--Desktop-->
            <section class="container-fluid d-none d-lg-flex justify-content-center py-5" style="height: 75vh; padding:0;">
                <div class="row position-relative w-100" style="padding: 0; max-width: 1150px;">
                    <div class="position-absolute mask border border-dark text-white w-50 h-auto p-3 top-0 start-0 rounded" style="z-index: 5; background-color: rgba(7,7,7,.8)">
                        <h2 class="text-center mb-3">{{$event->title}}</h2>
                        <p class="">{{$event->summary}}</p>
                        <div class="text-center">
                            <button class="btn btn-primary">Reserve Your Spot</button>
                        </div>
                    </div>
                    <div class="position-absolute bg-success w-75 h-75 bottom-0 end-0" style="padding:0;">
                        <img src="/images/events/{{$event->img}}" alt="" class="w-100 h-100 border border-dark rounded">
                    </div>
                </div>
            </section>
        </div>
        @endif
    @endforeach
    </div>
</section>

<!--Events-->
<section class="container-fluid text-center my-5 d-flex flex-column bg-secondary justify-content-center" style="padding: 0;">
    <div class="row">
        <h1 class="fw-bold display-1 mt-5">All Events</h1>
    </div>

    <!--Event Cards-->
    <div class="row mt-5">
        @foreach($events as $event)
        <div class="col-12 col-md-6 col-lg-4 d-flex flex-column text-center justify-content-center mb-5">
            <div class="card h-100 mx-auto" style="width: 18rem;">
                <img src="/images/events/{{$event->img}}" height="189" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-4">
                        <h5 class="card-title"><strong>{{$event->title}}</strong></h5>
                        <div class="truncate-text-4">
                            <p class="card-text">{{$event->summary}}</p>
                            <hr>
                        </div>
                        <p class="w-100 text-start mt-3 mb-0"><strong>Date: </strong>{{$event->date}}</p>
                    </div>
                  <a href="/events/view/{{$event->id}}" class="btn btn-primary">View Event Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection