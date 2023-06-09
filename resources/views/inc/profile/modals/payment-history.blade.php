<div class="modal" id="exampleModal{{$inactive_order->id}}" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Order ID: {{$inactive_order->id}} | {{$inactive_order->book->title}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row mb-3 d-flex justify-content-center">
                <div class="col d-flex">
                    <img src="/images/books/{{$inactive_order->book->book_img}}" width="150" alt="" class="m-auto">
                </div>
            </div>
            <h3 class="text-center">Order Details</h3>
            <p class="w-100"><strong>Checked Out: </strong><span class="text-nowrap">{{$inactive_order->created_at}}</span></p>
            <p class="w-100"><strong>Days Overdue: </strong><span class="text-nowrap">{{$inactive_order->days_overdue}}</span></p>
            <p class="w-100"><strong>Fees: </strong><span class="text-nowrap">${{$inactive_order->fees_due}}</span></p>
            <p class="w-100"><strong>Checked In: </strong><span class="text-nowrap">{{$inactive_order->updated_at}}</span></p>
            <hr>
            @foreach($inactive_order->FeePaymentLogs as $payment)
            <p class="w-100"><strong>Payment ID: </strong><span class="text-nowrap">{{$payment->id}}</span></p>
            <p class="w-100"><strong>Amount Paid: </strong><span class="text-nowrap">${{$payment->amount_paid}}</span></p>
            <hr>
            @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>