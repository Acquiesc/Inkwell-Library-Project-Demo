@extends ('layouts.admin')

@section('content')

<section class="container-fluid">
    <div class="row mt-5 mb-3">
        <div class="col text-center">
            <h1>Manage Catalog</h1>
        </div>
    </div>
    <div class="row d-flex my-3 mb-5 py-3 border border-dark">
        <div class="col-12 col-md-4 mb-3">
            <label for="title_search" class="form-label">Search by title</label>
            <input class="form-control" id="title_search" name="title_search" placeholder="Search by title...">
        </div>
        <div class="col-12 col-md-4 mb-3">
            <label for="author_search" class="form-label">Search by author</label>
            <input class="form-control" id="author_search" name="author_search" placeholder="Search by author...">
        </div>
        <div class="col-12 col-md-4 mb-3">
            <label for="ISBN_search" class="form-label">Search by ISBN</label>
            <input class="form-control" id="ISBN_search" name="ISBN_search" placeholder="Search by ISBN...">
        </div>
    </div>
    <div class="row" id="catalog">
        @foreach($books as $book)
        <div class="col-12 col-md-6 col-lg-3 d-flex flex-column text-center justify-content-center mb-5">
            <a href="/admin/catalog/edit/{{$book->id}}"><img src="/images/books/{{$book->book_img}}" width="100" height="150" alt="" class="mx-auto mb-3"></a>
            <a href="/admin/catalog/edit/{{$book->id}}"><h5>{{$book->title}}</h5></a>
        </div>
        @endforeach
    </div>
    
    <script>
        function toggleDropdown(inputId, searchUrl) {
            var input = $('#' + inputId);
            var catalog = $('#catalog');
            
            input.on('input', function(event) {
                var searchTerm = event.target.value;
                
                $.ajax({
                    url: searchUrl,
                    method: 'GET',
                    data: { searchTerm: searchTerm },
                    success: function(response) {
                        var books = response;
                        
                        catalog.empty();
                                                
                        response.forEach(function(book) {
                            var bookCard = $('<div class="book">');
                            var img = $('<img>').attr('src', '/images/books/' + book.book_img).attr('width', '100').attr('height', '150').addClass('mx-auto mb-3');
                            var title = $('<h5>').text(book.title);
                            var link = $('<a>').attr('href', '/admin/catalog/edit/' + book.id).append(img).append(title);
                            var bookContainer = $('<div>').addClass('col-12 col-md-6 col-lg-3 d-flex flex-column text-center justify-content-center mb-5').append(link);
                            catalog.append(bookContainer);
                        });
                        
                        catalog.show();
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        }
        
        // Call the initializeDropdown function for each dropdown you want to initialize
        toggleDropdown('title_search', '/catalog/search/title');
        toggleDropdown('author_search', '/catalog/search/author');
        toggleDropdown('ISBN_search', '/catalog/search/ISBN');
    </script>
        
</section>

@endsection