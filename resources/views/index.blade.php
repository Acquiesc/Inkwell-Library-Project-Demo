@extends ('layouts.standard')

@section('content')

<!--Hero Section-->
<section class="container-fluid text-center position-relative border-bottom border-dark" style="height: calc(100vh - 57px); padding:0;">
    <h1 class="pt-5 fw-bold display-1" style="color:var(--burgandy);">Inkwell Library</h1>
    <h3><strong>Where knowledge, education, and entertainment know no bounds</strong></h3>
    <br>
    <a href="/member/sign-up" class="btn bg-image btn-primary">Become a Member Today</a>

    <img src="/images/hero-books.png" alt="" class="position-absolute bottom-0 start-0 h-50 w-100">
    <a href="#summerFavorites"><i id="hero-arrow-down" class="bi bi-arrow-down fw-bold display-1 floating"></i></a>
</section>

<!--Summer Favorites-->
<section id="summerFavorites" class="container-fluid text-center p-5">
    <h1 class="fw-bold display-1 mt-5">Summer Favorites</h1>

    <!--Multiple Item Carousel-->
    <div class="container-fluid text-center my-5">
		<div class="row mx-auto my-auto justify-content-center">
			<div id="summerFavoritesCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://via.placeholder.com/700x500.png/CB997E/333333?text=1" class="img-fluid">
								</div>
								<div class="card-img-overlay">Slide 1</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://via.placeholder.com/700x500.png/DDBEA9/333333?text=2" class="img-fluid">
								</div>
								<div class="card-img-overlay">Slide 2</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://via.placeholder.com/700x500.png/FFE8D6/333333?text=3" class="img-fluid">
								</div>
								<div class="card-img-overlay">Slide 3</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://via.placeholder.com/700x500.png/B7B7A4/333333?text=4" class="img-fluid">
								</div>
								<div class="card-img-overlay">Slide 4</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://via.placeholder.com/700x500.png/A5A58D/333333?text=5" class="img-fluid">
								</div>
								<div class="card-img-overlay">Slide 5</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://via.placeholder.com/700x500.png/6B705C/eeeeee?text=6" class="img-fluid">
								</div>
								<div class="card-img-overlay">Slide 6</div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev bg-transparent w-aut" href="#summerFavoritesCarousel" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				</a>
				<a class="carousel-control-next bg-transparent w-aut" href="#summerFavoritesCarousel" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				</a>
			</div>
		</div>		
	</div>

    <!--Multiple Item Carousel Script-->
    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
        }
        })
    </script>

</section>



<!--Events-->
<section class="container-fluid text-center p-5">
    <h1 class="fw-bold display-1 mt-5">Upcoming Events</h1>

    <!--Event Cards-->
    <div class="row my-5 d-flex justify-content-evenly">
        <div class="col d-flex justify-content-center mb-3">
            <div class="card h-100" style="width: 18rem;">
                <img src="/images/surreal-book.webp" class="card-img-top" alt="...">
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
                <img src="/images/surreal-book.webp" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-5">
                        <h5 class="card-title"><strong>Ignite Your Creativity: A Workshop on the Art of Creative Writing</strong></h5>
                        <div class="truncate-text-4">
                            <p class="card-text">Discover the art of creative writing in this immersive workshop designed to spark your imagination and develop your storytelling skills. Learn the fundamentals of crafting compelling characters, building vibrant settings, and creating captivating narratives. Whether you're a novice writer or looking to enhance your existing skills, this workshop will ignite your creativity and set you on a path of literary exploration.</p>
                        </div>
                    </div>
                  <a href="#" class="btn btn-primary">View Event Details</a>
                </div>
              </div>
        </div>
        <div class="col d-flex justify-content-center mb-3">
            <div class="card h-100" style="width: 18rem;">
                <img src="/images/surreal-book.webp" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-5">
                        <h5 class="card-title"><strong>Literary Voyage: Book Club Meeting for Bookworms</strong></h5>
                        <div class="truncate-text-4">
                            <p class="card-text">Embark on a literary voyage with fellow bookworms as we delve into captivating stories and engage in thought-provoking discussions. This month, we explore an acclaimed contemporary novel that challenges societal norms and sparks meaningful dialogue. Share your insights, exchange perspectives, and connect with fellow book enthusiasts in a welcoming and intellectually stimulating environment.</p>
                        </div>
                    </div>
                  <a href="#" class="btn btn-primary">View Event Details</a>
                </div>
              </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col">
            <a href="#" class="btn btn-primary">View Event Calendar</a>
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
        <div class="col-11 col-lg-6">
            <h1>Dive into Adventure: Join our Summer Reading Program!</h1>
            <p>Embark on a thrilling literary journey this summer with our exciting Summer Reading Program! Immerse yourself in captivating stories, explore new worlds, and let your imagination soar. Whether you're a bookworm, an avid reader, or looking to discover the joy of reading, this program is designed for all ages and promises endless adventure. Dive into a sea of books, earn badges, participate in engaging activities, and unlock surprises along the way. Join us as we celebrate the magic of reading and make this summer a season filled with inspiration, knowledge, and unforgettable tales. Sign up today and let the adventure begin!</p>
        </div>
    </div>
</section>

<!--Desktop-->
<section class="container-fluid d-none d-lg-block" style="padding: 0;">
    <div class="row d-flex justify-content-center">
        <div class="col-11 d-flex justify-content-center mb-3">
            <img src="/images/surreal-book.webp" alt="" class="w-100 ">
        </div>
        <div class="col-11">
            <h1>Dive into Adventure: Join our Summer Reading Program!</h1>
            <p>Embark on a thrilling literary journey this summer with our exciting Summer Reading Program! Immerse yourself in captivating stories, explore new worlds, and let your imagination soar. Whether you're a bookworm, an avid reader, or looking to discover the joy of reading, this program is designed for all ages and promises endless adventure. Dive into a sea of books, earn badges, participate in engaging activities, and unlock surprises along the way. Join us as we celebrate the magic of reading and make this summer a season filled with inspiration, knowledge, and unforgettable tales. Sign up today and let the adventure begin!</p>
        </div>
    </div>
</section>

@endsection