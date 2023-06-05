@extends ('layouts.standard')

@section('content')

<section class="container">
    <div class="row mt-3 mb-5">
        <div class="col">
            <h1 class = "fw-bold text-center">Your Cart</h1>
        </div>
    </div>
    @if(count($cart_items) > 0)
    @foreach($cart_items as $cart_item)
    <div class="row border border-dark p-3 mb-5" style="background-color: var(--ivory);">
        <div class="col-12 col-lg-3 d-flex flex-column text-start align-items-center">
            <img src="/images/books/{{$cart_item->book->book_img}}" width="150" alt="" class="m-auto">
        </div>
        <div class="col-12 col-md-4 col-lg-2 d-flex flex-column text-start align-items-center">
            <p class="w-100"><strong>Title:</strong><br> {{$cart_item->book->title}}</p>
            <p class="w-100"><strong>Author:</strong><br> {{$cart_item->book->author}}</p>
            <p class="w-100"><strong>ISBN:</strong><br> {{$cart_item->book->ISBN}}</p>
        </div>
        <div class="col-12 col-md-4 col-lg-3 d-flex flex-column text-start align-items-center">
            <p class="w-100"><strong>Summary: </strong><br> {{$cart_item->book->summary}}</p>
        </div>
        <div class="col-12 col-md-4 col-lg-2 d-flex flex-column text-start align-items-center">
            <p class="w-100"><strong>Publisher: </strong><br> {{$cart_item->book->publisher}}</p>
            <p class="w-100"><strong>Published Date: </strong><br> {{$cart_item->book->published_date}}</p>
        </div>
        <div class="col-12  col-lg-2 d-flex flex-column text-start align-items-center">
            {!! Form::open(['action' => ['App\Http\Controllers\CartsController@destroy', $cart_item->id], 'files' => false, 'method' => 'POST', 'class' => 'my-auto']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{ Form::submit('Remove', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
    @endforeach
</section>

<section class="container my-5">
    <div class="row">
        <div class="col text-center">
            {!! Form::open(['action' => ['App\Http\Controllers\OrdersController@store'], 'files' => false, 'method' => 'POST', 'class' => 'm-auto']) !!}
                {{ Form::submit('Place Your Order', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
</section>
@else
<div class="row">
    <div class="col text-center">
        <h3 class="mb-5">There are currently no items in your cart</h3>
        <a href="/catalog" class="fs-4"><u>View our full catalog here</u></a>
    </div>
</div>
@endif

@endsection