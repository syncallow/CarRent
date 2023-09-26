<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="section-heading"><strong>Testimonials</strong></h2>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row">
            @foreach($info->getGoogleReviews() as $review)
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="testimonial-2">
                        <blockquote class="mb-4">
                            <p>"{{ substr($review['text'], 0, 204). '...' }}"</p>
                        </blockquote>
                        <div class="d-flex v-card align-items-center">
                            <img src="{{ $review['profile_photo_url'] }}" alt="{{ $review['author_name'] }}" class="img-fluid mr-3">
                            <div class="author-name">
                                <span class="d-block">{{ $review['author_name'] }}</span>
                                <span>{{ \Carbon\Carbon::parse($review['time'])->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @break($loop->iteration == 3)
            @endforeach

        </div>
    </div>
</div>
