@extends ('layouts.profile')

@section('content')

<div class="container-fluid">
    <div class="row d-flex justify-content-center mb-5">
        <div class="col text-center">
            <h1>Order History</h1>
        </div>
    </div>
    @if(count($orders) > 0)
    @foreach($orders as $current_order)
    <div class="row border border-dark p-3 mb-5" style="background-color: var(--ivory);">
        <div class="col-12 col-lg-3 d-flex flex-column text-start align-items-center">
            <img src="/images/books/{{$current_order->book->book_img}}" width="150" alt="" class="m-auto">
        </div>
        <div class="col-12 col-md-4 col-lg-2 d-flex flex-column text-start align-items-center">
            <p class="w-100"><strong>Title:</strong><br> {{$current_order->book->title}}</p>
            <p class="w-100"><strong>Author:</strong><br> {{$current_order->book->author}}</p>
            <p class="w-100"><strong>ISBN:</strong><br> {{$current_order->book->ISBN}}</p>
        </div>
        <div class="col-12 col-md-4 col-lg-3 d-flex flex-column text-start align-items-center">
            <p class="w-100"><strong>Summary: </strong><br> {{$current_order->book->summary}}</p>
        </div>
        <div class="col-12 col-md-4 col-lg-2 d-flex flex-column text-start align-items-center">
            <p class="w-100"><strong>Publisher: </strong><br> {{$current_order->book->publisher}}</p>
            <p class="w-100"><strong>Published Date: </strong><br> {{$current_order->book->published_date}}</p>
        </div>
        <div class="col-12  col-lg-2 d-flex flex-column text-start border-start border-dark align-items-center">
            <p class="w-100"><strong>Order ID: </strong><span class="text-nowrap">{{$current_order->id}}</span></p>
            <p class="w-100"><strong>Available for Pickup: </strong><span class="text-nowrap">{{$current_order->available_date}}</span></p>
            <p class="w-100"><strong>Due Date: </strong><span class="text-nowrap">{{$current_order->due_date}}</span></p>
            <p class="w-100"><strong>Fees: </strong><span class="text-nowrap">${{number_format((0.25 * $current_order->days_overdue), 2)}}</span></p>
            @if((0.25 * $current_order->days_overdue) > 0)
            
            @endif
        </div>
    </div>
    @endforeach
    @else
    <div class="row">
        <div class="col text-center">
            <h3 class="mb-3">You have no previous orders</h3>
            <a href="/catalog"><u>View Our Full Catalog Here</u></a>
        </div>
    </div>
    @endif
</div>



@endsection