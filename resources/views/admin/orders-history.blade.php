@extends ('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row d-flex justify-content-center mb-5">
        <div class="col text-center">
            <h1>Order History</h1>
        </div>
    </div>
    @if(count($orders) > 0)
    @foreach($orders as $current_order)
    <div class="row d-flex justify-content-evenly border border-dark p-3 mb-5" style="background-color: var(--ivory);">
        <div class="col-12 col-lg-3 mb-3 d-flex flex-column text-start align-items-center">
            <img src="/images/books/{{$current_order->book->book_img}}" width="150" alt="" class="m-auto">
        </div>
        <div class = "col-12 col-md-5 col-lg-4">
            <div class="row d-flex justify-content-evenly">
                <div class="col d-flex flex-column text-start border-start border-dark align-items-center ps-3">
                    <p class="w-100"><strong>Title:</strong><br> {{$current_order->book->title}}</p>
                    <p class="w-100"><strong>Author:</strong><br> {{$current_order->book->author}}</p>
                    <p class="w-100"><strong>ISBN:</strong><br> {{$current_order->book->ISBN}}</p>
                </div>
                <div class="col d-flex flex-column text-start border-start border-dark align-items-center ps-3">
                    <p class="w-100"><strong>Publisher: </strong><br> {{$current_order->book->publisher}}</p>
                    <p class="w-100"><strong>Published Date: </strong><br> {{$current_order->book->published_date}}</p>
                </div>
            </div>
        </div>
        <div class = "col-12 col-md-5 col-lg-5">
            <div class="row d-flex justify-content-evenly">
                <div class="col d-flex flex-column text-start border-start border-dark align-items-center ps-3">
                    <p class="w-100"><strong><u>Customer:</u> </strong></p>
                    <p class="w-100"><strong>Name: </strong><br> {{$current_order->user->name}}</p>
                    <p class="w-100 text-break"><strong>Email: </strong><br> {{$current_order->user->email}}</p>
                </div>
                <div class="col d-flex flex-column text-start border-start border-dark align-items-center ps-3">
                    <p class="w-100"><strong><u>Order:</u> </strong></p>
                    <p class="w-100"><strong>Order ID: </strong><span class="text-nowrap">{{$current_order->id}}</span></p>
                    <p class="w-100"><strong>Due Date: </strong><span class="text-nowrap">{{$current_order->due_date}}</span></p>
                    <p class="w-100"><strong>Checked In: </strong><span class="text-nowrap">{{$current_order->checked_in_date}}</span></p>
                    <p class="w-100"><strong>Total Fees: </strong><span class="text-nowrap">${{$current_order->total_fees_accrued}}</span></p>
                    @if($current_order->total_fees_accrued > 0)
                    <p class="w-100"><strong>Fees Paid: </strong><span class="text-nowrap">${{$current_order->total_fees_paid}}</span></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="row">
        <div class="col text-center">
            <h3 class="mb-3">No order history found</h3>
        </div>
    </div>
    @endif
</div>



@endsection