@extends ('layouts.standard')

@section('content')

<section>
    <h1>Catalog</h1>
    @if(count($books) > 0)
        <h3>Books</h3>
    @else
        <h3>No Books</h3>
    @endif
</section>

@endsection