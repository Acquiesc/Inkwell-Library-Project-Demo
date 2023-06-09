@extends ('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row d-flex justify-content-center mb-5">
        <div class="col text-center">
            <h1>Current Orders</h1>
        </div>
    </div>
    @if(count($current_orders) > 0)
    @foreach($current_orders as $current_order)
    <div class="row border border-dark p-3 mb-5" style="background-color: var(--ivory);">
        <div class="col-12 col-lg-3 d-flex flex-column text-start align-items-center">
            <img src="/images/books/{{$current_order->book->book_img}}" width="150" alt="" class="m-auto">
        </div>
        <div class="col-12 col-md-4 col-lg-2 d-flex flex-column text-start align-items-center">
            <p class="w-100"><strong>Title:</strong><br> {{$current_order->book->title}}</p>
            <p class="w-100"><strong>Author:</strong><br> {{$current_order->book->author}}</p>
            <p class="w-100"><strong>ISBN:</strong><br> {{$current_order->book->ISBN}}</p>
        </div>
        <div class="col-12 col-md-4 col-lg-2 d-flex flex-column text-start align-items-center">
            <p class="w-100"><strong>Publisher: </strong><br> {{$current_order->book->publisher}}</p>
            <p class="w-100"><strong>Published Date: </strong><br> {{$current_order->book->published_date}}</p>
        </div>
        <div class="col-12 col-md-4 col-lg-3 d-flex flex-column text-start border-start border-dark align-items-center">
            <p class="text-center"><strong>Customer: </strong></p>
            <p class="w-100"><strong>Name: </strong><br> {{$current_order->user->name}}</p>
            <p class="w-100"><strong>Email: </strong><br> {{$current_order->user->email}}</p>
        </div>
        <div class="col-12  col-lg-2 d-flex flex-column text-start border-start border-dark align-items-center">
            <p class="w-100"><strong>Order ID: </strong><span class="text-nowrap">{{$current_order->id}}</span></p>
            <p class="w-100"><strong>Available for Pickup: </strong><span class="text-nowrap">{{$current_order->available_date}}</span></p>
            <p class="w-100"><strong>Due Date: </strong><span class="text-nowrap">{{$current_order->due_date}}</span></p>
            <p class="w-100"><strong>Fees: </strong><span class="text-nowrap">${{$current_order->fees_due}}</span></p>
            @if(($current_order->fees_due) > 0)
            {!! Form::open(['action' => ['App\Http\Controllers\OrdersController@update', $current_order->id], 'files' => false, 'method' => 'POST', 'class' => 'my-auto']) !!}
                @method('PUT')
                {{ Form::submit('Pay Fees', ['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
            @else
            {!! Form::open(['action' => ['App\Http\Controllers\OrdersController@update', $current_order->id], 'files' => false, 'method' => 'POST', 'class' => 'my-auto']) !!}
                @method('PUT')
                {{ Form::submit('Check-In', ['class'=>'btn btn-success'])}}
            {!! Form::close() !!}
            @endif
        </div>
    </div>
    @endforeach
    @else
    <div class="row">
        <div class="col text-center">
            <h3 class="mb-3">You have no active orders</h3>
            <a href="/catalog"><u>View Our Full Catalog Here</u></a>
        </div>
    </div>
    @endif
</div>



@endsection