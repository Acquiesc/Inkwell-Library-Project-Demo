@extends ('layouts.standard')

@section('content')

<div class="container-fluid">
    <div class="row bg-dark border-top p-3 border-secondary">
        <div class="col">
            <h1 class="text-center mb-3 text-primary">Inkwell Library</h1>
            <h3 class="text-center mb-5 text-white">Events</h3>
        </div>
    </div>
</div>

<section class="container">
    <div class="row p-3 mb-3">
        <div class="col">
            <h1 class="text-center display-3 fw-bold mt-3">Upcoming Events</h1>
        </div>
    </div>
    <div class="row">
        <!--Mobile-->
        <section class="container-fluid d-lg-none" style="padding: 0;">
            <div class="row d-flex justify-content-center">
                <div class="col-11 col-lg-6 d-flex justify-content-center mb-3">
                    <img src="/images/mystery-event.jpg" alt="" class="w-75 ">
                </div>
                <div class="col-11 col-lg-6 text-white bg-dark p-3">
                    <h2 class="text-center mb-3">Unveiling the Enigma: An Evening with Renowned Mystery Authors</h2>
                    <p class="">Join us for an engaging evening with renowned mystery 
                        authors as they discuss their craft, share behind-the-scenes insights, 
                        and reveal the secrets to crafting gripping suspense and intriguing plot 
                        twists. Don't miss this opportunity to meet the masterminds behind 
                        captivating mysteries!</p>
                    <div class="text-center">
                        <button class="btn btn-primary">Reserve Your Spot</button>
                    </div>
                </div>
            </div>
        </section>

        <!--Desktop-->
        <section class="container-fluid d-none d-lg-flex justify-content-center py-5" style="height: 75vh; padding:0;">
            <div class="row position-relative w-100" style="padding: 0; max-width: 1150px;">
                <div class="position-absolute mask border border-dark text-white w-50 h-auto p-3 top-0 end-0 rounded" style="z-index: 5; background-color: rgba(7,7,7,.8)">
                    <h2 class="text-center mb-3 px-3">Unveiling the Enigma: An Evening with Renowned Mystery Authors</h2>
                    <p class="">Join us for an engaging evening with renowned mystery 
                        authors as they discuss their craft, share behind-the-scenes insights, 
                        and reveal the secrets to crafting gripping suspense and intriguing plot 
                        twists. Don't miss this opportunity to meet the masterminds behind 
                        captivating mysteries!</p>
                    <div class="text-center">
                        <button class="btn btn-primary">Reserve Your Spot</button>
                    </div>
                </div>
                <div class="position-absolute bg-success w-75 h-75 bottom-0 start-0" style="padding:0;">
                    <img src="/images/mystery-event.jpg" alt="" class="w-100 h-100 rounded">
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <!--Mobile-->
        <section class="container-fluid d-lg-none" style="padding: 0;">
            <div class="row d-flex justify-content-center">
                <div class="col-11 col-lg-6 d-flex justify-content-center mb-3">
                    <img src="/images/creative-writing-event.jpg" alt="" class="w-75 ">
                </div>
                <div class="col-11 col-lg-6 text-white bg-dark p-3">
                    <h2 class="text-center mb-3">Ignite Your Creativity: A Workshop on the Art of Creative Writing</h2>
                    <p class="">Discover the art of creative writing in this immersive workshop designed to 
                        spark your imagination and develop your storytelling skills. Learn the fundamentals of 
                        crafting compelling characters, building vibrant settings, and creating captivating narratives. 
                        Whether you're a novice writer or looking to enhance your existing skills, this workshop will ignite 
                        your creativity and set you on a path of literary exploration.</p>
                    <div class="text-center">
                        <button class="btn btn-primary">Reserve Your Spot</button>
                    </div>
                </div>
            </div>
        </section>

        <!--Desktop-->
        <section class="container-fluid d-none d-lg-flex justify-content-center py-5" style="height: 75vh; padding:0;">
            <div class="row position-relative w-100" style="padding: 0; max-width: 1150px;">
                <div class="position-absolute mask border border-dark text-white w-50 h-auto p-3 top-0 start-0 rounded" style="z-index: 5; background-color: rgba(7,7,7,.8)">
                    <h2 class="text-center mb-3">Ignite Your Creativity: A Workshop on the Art of Creative Writing</h2>
                    <p class="">Discover the art of creative writing in this immersive workshop designed to 
                        spark your imagination and develop your storytelling skills. Learn the fundamentals of 
                        crafting compelling characters, building vibrant settings, and creating captivating narratives. 
                        Whether you're a novice writer or looking to enhance your existing skills, this workshop will ignite 
                        your creativity and set you on a path of literary exploration.</p>
                    <div class="text-center">
                        <button class="btn btn-primary">Reserve Your Spot</button>
                    </div>
                </div>
                <div class="position-absolute bg-success w-75 h-75 bottom-0 end-0" style="padding:0;">
                    <img src="/images/creative-writing-event.jpg" alt="" class="w-100 h-100 rounded">
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <!--Mobile-->
        <section class="container-fluid d-lg-none" style="padding: 0;">
            <div class="row d-flex justify-content-center">
                <div class="col-11 col-lg-6 d-flex justify-content-center mb-3">
                    <img src="/images/book-club-event.jpg" alt="" class="w-75 ">
                </div>
                <div class="col-11 col-lg-6 text-white bg-dark p-3">
                    <h2 class="text-center mb-3">Literary Voyage: Book Club Meeting for Bookworms</h2>
                    <p class="">Embark on a literary voyage with fellow bookworms as we delve into captivating stories 
                        and engage in thought-provoking discussions. This month, we explore an acclaimed contemporary 
                        novel that challenges societal norms and sparks meaningful dialogue. Share your insights, exchange 
                        perspectives, and connect with fellow book enthusiasts in a welcoming and intellectually 
                        stimulating environment.</p>
                    <div class="text-center">
                        <button class="btn btn-primary">Reserve Your Spot</button>
                    </div>
                </div>
            </div>
        </section>

        <!--Desktop-->
        <section class="container-fluid d-none d-lg-flex justify-content-center py-5" style="height: 75vh; padding:0;">
            <div class="row position-relative w-100" style="padding: 0; max-width: 1150px;">
                <div class="position-absolute mask border border-dark text-white w-50 h-auto p-3 top-0 end-0 rounded" style="z-index: 5; background-color: rgba(7,7,7,.8)">
                    <h2 class="text-center mb-3">Literary Voyage: Book Club Meeting for Bookworms</h2>
                    <p class="">Embark on a literary voyage with fellow bookworms as we delve into captivating stories 
                        and engage in thought-provoking discussions. This month, we explore an acclaimed contemporary 
                        novel that challenges societal norms and sparks meaningful dialogue. Share your insights, exchange 
                        perspectives, and connect with fellow book enthusiasts in a welcoming and intellectually 
                        stimulating environment.</p>
                    <div class="text-center">
                        <button class="btn btn-primary">Reserve Your Spot</button>
                    </div>
                </div>
                <div class="position-absolute bg-success w-75 h-75 bottom-0 start-0" style="padding:0;">
                    <img src="/images/book-club-event.jpg" alt="" class="w-100 h-100 rounded">
                </div>
            </div>
        </section>
    </div>
</section>

<!--Events-->
<section class="container text-center my-5 d-flex flex-column bg-secondary justify-content-center" style="padding: 0;">
    <div class="row">
        <h1 class="fw-bold display-1 mt-5">All Events</h1>
    </div>

    <!--Event Cards-->
    <div class="row mt-5 gap-5 d-flex justify-content-evenly">
        <div class="col d-flex justify-content-center mb-3">
            <div class="card h-100" style="width: 18rem;">
                <img src="/images/mystery-event.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-4">
                        <h5 class="card-title"><strong>Unveiling the Enigma: An Evening with Renowned Mystery Authors</strong></h5>
                        <div class="truncate-text-4">
                            <p class="card-text">Join us for an engaging evening with renowned mystery 
                                authors as they discuss their craft, share behind-the-scenes insights, 
                                and reveal the secrets to crafting gripping suspense and intriguing plot 
                                twists. Don't miss this opportunity to meet the masterminds behind 
                                captivating mysteries!</p>
                            <hr>
                        </div>
                        <p class="w-100 text-start mt-3 mb-0"><strong>Date: </strong>June 25, 2023</p>
                    </div>
                  <a href="#" class="btn btn-primary">View Event Details</a>
                </div>
            </div>
        </div>
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
                  <a href="#" class="btn btn-primary">View Event Details</a>
                </div>
            </div>
        </div>
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
                  <a href="#" class="btn btn-primary">View Event Details</a>
                </div>
            </div>
        </div>
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
                  <a href="#" class="btn btn-primary">View Event Details</a>
                </div>
            </div>
        </div>
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
                  <a href="#" class="btn btn-primary">View Event Details</a>
                </div>
            </div>
        </div>
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
                  <a href="#" class="btn btn-primary">View Event Details</a>
                </div>
            </div>
        </div>
</section>

@endsection