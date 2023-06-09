@extends ('layouts.profile')

@section('content')

<div class="container-fluid">
    <div class="row d-flex justify-content-center mb-5">
        <div class="col text-center">
            <h1>Fees</h1>
        </div>
    </div>
</div>

<div class="container-fluid" style="padding: 0;">
    <div class="row d-flex justify-content-evenly gap-5 p-3 mb-5" style="padding: 0;">
        <div class="col p-3 shadow border border-dark" style="background-color: var(--ivory);">
            <h1 class="text-center mb-5">Unpaid Fees</h1>
            @if(count($active_orders) > 0)
            @foreach($active_orders as $order)
            <div class="container">
                <div class="row d-flex justify-content-evenly mb-3">
                    <div class="col-auto">
                        <img src="/images/books/{{$order->book->book_img}}" width="150" alt="" class="mb-3">
                    </div>
                    <div class="col-auto d-flex gap-5 justify-content-evenly flex-nowrap">
                        <div class="col-auto">
                            <p class="w-100"><strong>Title:</strong><br> {{$order->book->title}}</p>
                            <p class="w-100"><strong>Author:</strong><br> {{$order->book->author}}</p>
                            <p class="w-100"><strong>ISBN:</strong><br> {{$order->book->ISBN}}</p>
                        </div>
                        <div class="col-auto">
                            <p class="w-100"><strong>Order ID: </strong><span class="text-nowrap">{{$order->id}}</span></p>
                            <p class="w-100"><strong>Days Overdue: </strong><span class="text-nowrap">{{$order->days_overdue}}</span></p>
                            <p class="w-100"><strong>Fees: </strong><span class="text-nowrap">${{$order->total_fees_due}}</span></p>
                            <a href="/profile/fees/pay/{{$order->id}}" class="btn btn-primary">Pay Fees</a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            @endforeach
            @else
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="text-center">You have no unpaid fees</h4>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="col p-3 shadow border border-dark" style="background-color: var(--ivory);">
            <h1 class="text-center mb-5">Payment History</h1>
            <div class="container">
                @if(count($payment_logs) > 0)
                @foreach($payment_logs as $payment)
                <div class="row d-flex justify-content-evenly mb-3">
                    <div class="col-auto mb-3">
                        <img src="/images/books/{{$payment->order->book->book_img}}" width="150" alt="" class="m-auto">
                    </div>
                    <div class="col-auto d-flex gap-5 justify-content-evenly flex-nowrap">
                        <div class="col-auto">
                            <p class=""><strong>Order ID: </strong><span class="text-nowrap"><br>{{$payment->order->id}}</span></p>
                            <p class=""><strong>Checked Out: </strong><span class="text-nowrap"><br>{{$payment->created_at}}</span></p>
                            <p class=""><strong>Days Overdue: </strong><span class="text-nowrap"><br>{{$payment->order->days_overdue}}</span></p>
                            @if($payment->order->checked_in_date != null)
                            <p class=""><strong>Checked In: </strong><span class="text-nowrap"><br>{{$payment->order->checked_in_date}}</span></p>
                            @else
                            <p class=""><strong>Checked In: </strong><span class="text-nowrap"><br>Not checked in</span></p>
                            @endif
                        </div>
                        <div class="col-auto">
                            <p class=""><strong>Amount Paid: </strong><span class="text-nowrap"><br>${{$payment->amount_paid}}</span></p>
                            <p class=""><strong>Paid On: </strong><span class="text-nowrap"><br>{{$payment->created_at}}</span></p>
                            <p class=""><strong>Card Ending: </strong><span class="text-nowrap"><br>{{$payment->card_number}}</span></p>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fee-{{$payment->id}}-details">
                                    <i class="fs-5 bi bi-eye"></i>
                                </button>
                            </div>
                
                            @include('inc.profile.modals.payment-history')
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
                @else
                <div class="row">
                    <div class="col">
                        <h4 class = "text-center">There is no payment history associated with this account</h4>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>



@endsection