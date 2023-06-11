@extends ('layouts.standard')

@section('content')

<!--Hero Section-->
<section class="container-fluid text-center position-relative border-bottom border-dark" style="height: calc(100vh - 57px); padding:0;">
    <h1 class="pt-5 fw-bold display-1" style="color:var(--burgandy);">Inkwell Library</h1>
    <h3><strong>Where knowledge, education, and entertainment know no bounds</strong></h3>
    <br>
    @if(!Auth::user())
    <a href="#membership-details" class="btn bg-image btn-primary">Become a Member Today</a>
    @else
    <a href="/profile/home" class="btn bg-image btn-primary">View Your Profile</a>
    @endif
    <img src="/images/hero-books.png" alt="" class="position-absolute bottom-0 start-0 h-50 w-100">
    <a href="#summerFavorites"><i id="hero-arrow-down" class="bi bi-arrow-down fw-bold display-1 floating"></i></a>
</section>

<!--Summer Favorites-->
<section id="summerFavorites" class="container-fluid text-center" style="padding: 0;">
    <div class="row">
        <h1 class="fw-bold display-1 mt-5">Summer Favorites</h1>
    </div>

    <div class="row my-5 d-flex flex-nowrap gap-5 py-5" style="overflow-x: scroll;">
        @foreach($favorite_books as $favorite_book)
        <div class="col ms-5">
            <div class="card" style="width: 18rem;">
                <img src="/images/books/{{$favorite_book->book_img}}" height="393" width="292" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">{{$favorite_book->title}}</h5>
                    <p class="card-text">{{$favorite_book->author}}</p>
                    <a href="/catalog/view/{{$favorite_book->id}}" class="btn btn-primary">View Book</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row text-center">
        <div class="col">
            <a href="/catalog" class="btn btn-primary">Browse Our Full Catalog</a>
        </div>
    </div>
</section>



<!--Events-->
<section class="container-fluid text-center my-5 d-flex flex-column bg-secondary justify-content-center" style="padding: 0;">
    <div class="row">
        <h1 class="fw-bold display-1 mt-5">Upcoming Events</h1>
    </div>

    <!--Event Cards-->
    <div class="row mt-5 mx-auto gap-5 d-flex justify-content-center" style="max-width: 75rem">
        <div class="col d-flex justify-content-center mb-3">
            <div class="card h-100" style="width: 18rem;">
                <img src="/images/mystery-event.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-5">
                        <h5 class="card-title"><strong>Unveiling the Enigma: An Evening with Renowned Mystery Authors</strong></h5>
                        <div class="truncate-text-4">
                            <p class="card-text">Join us for an engaging evening with renowned mystery 
                                authors as they discuss their craft, share behind-the-scenes insights, 
                                and reveal the secrets to crafting gripping suspense and intriguing plot 
                                twists. Don't miss this opportunity to meet the masterminds behind 
                                captivating mysteries!</p>
                        </div>
                    </div>
                    <!--TODO: add dynamic id to link-->
                  <a href="/events/view/{id}" class="btn btn-primary">View Event Details</a>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center mb-3">
            <div class="card h-100" style="width: 18rem;">
                <img src="/images/creative-writing-event.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-5">
                        <h5 class="card-title"><strong>Ignite Your Creativity: A Workshop on the Art of Creative Writing</strong></h5>
                        <div class="truncate-text-4">
                            <p class="card-text">Discover the art of creative writing in this immersive workshop designed to spark your imagination and develop your storytelling skills. Learn the fundamentals of crafting compelling characters, building vibrant settings, and creating captivating narratives. Whether you're a novice writer or looking to enhance your existing skills, this workshop will ignite your creativity and set you on a path of literary exploration.</p>
                        </div>
                    </div>
                  <!--TODO: add dynamic id to link-->
                  <a href="/events/view/{id}" class="btn btn-primary">View Event Details</a>
                </div>
              </div>
        </div>
        <div class="col d-flex justify-content-center mb-3">
            <div class="card h-100" style="width: 18rem;">
                <img src="/images/book-club-event.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-5">
                        <h5 class="card-title"><strong>Literary Voyage: Book Club Meeting for Bookworms</strong></h5>
                        <div class="truncate-text-4">
                            <p class="card-text">Embark on a literary voyage with fellow bookworms as we delve into captivating stories and engage in thought-provoking discussions. This month, we explore an acclaimed contemporary novel that challenges societal norms and sparks meaningful dialogue. Share your insights, exchange perspectives, and connect with fellow book enthusiasts in a welcoming and intellectually stimulating environment.</p>
                        </div>
                    </div>
                  <!--TODO: add dynamic id to link-->
                  <a href="/events/view/{id}" class="btn btn-primary">View Event Details</a>
                </div>
              </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col">
            <a href="/events" class="btn btn-primary">View All Events</a>
        </div>
    </div>
</section>

<!--Summer Reading Program-->
<!--Mobile-->
<section class="container-fluid d-lg-none" style="padding: 0;">
    <div class="row d-flex justify-content-center">
        <div class="col-11 col-lg-6 d-flex justify-content-center mb-3">
            <img src="/images/surreal-book.webp" alt="" class="w-75 ">
        </div>
        <div class="col-11 col-lg-6 text-white bg-dark p-3">
            <h2 class="text-center mb-3">Dive into Adventure: Join our Summer Reading Program!</h2>
            <p class="truncate-text-4">Embark on a thrilling literary journey this summer with our exciting Summer Reading Program! Immerse yourself in captivating stories, explore new worlds, and let your imagination soar. Whether you're a bookworm, an avid reader, or looking to discover the joy of reading, this program is designed for all ages and promises endless adventure. Dive into a sea of books, earn badges, participate in engaging activities, and unlock surprises along the way. Join us as we celebrate the magic of reading and make this summer a season filled with inspiration, knowledge, and unforgettable tales. Sign up today and let the adventure begin!</p>
            <div class="text-center">
                <!--TODO: add dynamic id to link-->
                <a href="/events/view/{id}" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!--Desktop-->
<section class="container-fluid d-none d-lg-flex justify-content-center my-5 py-5" style="height: 75vh; padding:0;">
    <div class="row position-relative w-100" style="padding: 0; max-width: 1150px;">
        <div class="position-absolute mask border border-dark text-white w-50 h-auto p-3 top-0 end-0 rounded" style="z-index: 5; background-color: rgba(7,7,7,.8)">
            <h2 class="text-center mb-3">Dive into Adventure: Join our Summer Reading Program!</h2>
            <p class="truncate-text-4">Embark on a thrilling literary journey this summer with our exciting Summer Reading Program! Immerse yourself in captivating stories, explore new worlds, and let your imagination soar. Whether you're a bookworm, an avid reader, or looking to discover the joy of reading, this program is designed for all ages and promises endless adventure. Dive into a sea of books, earn badges, participate in engaging activities, and unlock surprises along the way. Join us as we celebrate the magic of reading and make this summer a season filled with inspiration, knowledge, and unforgettable tales. Sign up today and let the adventure begin!</p>
            <div class="text-center">
                <!--TODO: add dynamic id to link-->
                <a href="/events/view/{id}" class="btn btn-primary">Learn More</a>
            </div>
        </div>
        <div class="position-absolute bg-success w-75 h-75 bottom-0 start-0" style="padding:0;">
            <img src="/images/surreal-book.webp" alt="" class="w-100 h-100 rounded">
        </div>
    </div>
</section>

<!--Membership Section-->
<section id="membership-details" class="container-fluid my-5 py-5">
    <div class="row d-flex flex-column-reverse flex-lg-row justify-content-center gap-5">
        <div class="col-12 col-lg-5 d-flex flex-column p-3 py-5 text-white rounded" style="background-color: var(--burgandy);">
            <div class="my-auto">
                <h1 class="highlight-gold text-center">Unlock a World of Knowledge: Join our Library Membership</h1>
                <p class="text-center">Sign up today to gain direct access to all of our <strong><u>free</u></strong> resources</p>
                <ul class="mx-auto" style="width: fit-content;">
                    <li class="list-item">Vast Collection of Books</li>
                    <li class="list-item">Exciting Events and Workshops</li>
                    <li class="list-item">Fully Online Ordering</li>
                    <li class="list-item">Summer Reading Program</li>
                    <li class="list-item">Knowledgeable Librarians</li>
                </ul>
                @if(!Auth::user())
                <div class="text-center">
                    <a href="/register" class="btn btn-secondary">Sign Up Now</a>
                </div>
                @else
                <div class="text-center">
                    <a href="/profile/home" class="btn btn-secondary">View Profile</a>
                </div>
                @endif
            </div>
        </div>
        <div class="col-12 col-lg-5 d-flex align-items-center justify-content-center">
            <img src="/images/reading-textbook.jpg" alt="" class="w-100 rounded">
        </div>
    </div>
</section>

<!--TODO: About Section-->
<section id="about-inkwell-library" class="container-fluid bg-secondary p-5 border-top border-dark">
    <div class="row justify-content-evenly gap-3 text-center">
      <div class="col-12 col-md-3 py-3 bg-light">
        <i class="bi bi-geo-alt-fill" style="font-size: 4rem;"></i>
        <h3 class = ""><u>Visit Us</u></h3>
        <p>1234 Fulton St. Grand Rapids, MI 49501</p>
      </div>
      <div class="col-12 col-md-3 py-3 bg-light">
        <i class="bi bi-clock-fill" style="font-size: 4rem;"></i>
        <h3 class = ""><u>Store Hours</u></h3>
        <div class="col text-nowrap">
          <p>Sunday: 8am - 3pm</p>
          <p>Monday: 8am - 8pm</p>
          <p>Tuesday: 8am - 8pm</p>
          <p>Wednesday: 8am - 8pm</p>
          <p>Thursday: 8am - 8pm</p>
          <p>Friday: 8am - 10pm</p>
          <p>Saturday: 8am - 10pm</p>
        </div>
      </div>
      <div class="col-12 col-md-3 py-3 text-nowrap bg-light">
        <i class="bi bi-telephone-fill" style="font-size: 4rem;"></i>
        <h3 class = ""><u>Contact Us</u></h3>
        <p>Phone: (616) 123-4567</p>
      </div>
    </div>
</section>



@endsection