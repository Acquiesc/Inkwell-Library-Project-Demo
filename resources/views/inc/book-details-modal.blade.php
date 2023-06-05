<!-- Modal -->
<div class="modal fade" id="book-detail-{{$book->id}}" tabindex="-1" aria-labelledby="book-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="{{$book->title}}">{{$book->title}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
            <p class="mb-3"><strong>Author:</strong> {{$book->author}}</p>
            <p class="mb-3"><strong>Summary:</strong> {{$book->summary}}</p>
            <p class="mb-3"><strong>ISBN:</strong> {{$book->ISBN}}</p>
            <p class="mb-3"><strong>Publisher:</strong> {{$book->publisher}}</p>
            <p class="mb-3"><strong>Published Date:</strong> {{$book->published_date}}</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>