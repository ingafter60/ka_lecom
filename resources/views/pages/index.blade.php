@extends('layouts.app')

@section('content')

	<!-- Banner -->

    <div class="banner">
    	@include('pages.inc.home.banner')
 	</div>

 	<!-- Characteristics -->

    <div class="characteristics">
    	@include('pages.inc.home.characteristics')
    </div>

    <!-- Deals of the week -->

    <div class="deals_featured">
    	@include('pages.inc.home.deals_of_the_week')
    </div>

    <!-- Popular Categories -->

    <div class="popular_categories">
    	@include('pages.inc.home.popular_categories')
    </div>

    <!-- Banner 2 -->

    <div class="banner_2">
    	@include('pages.inc.home.banner_2')
    </div>        

    <!-- Hot New Arrivals -->

    <div class="new_arrivals">
    	@include('pages.inc.home.hot_new_arrivals')
    </div>

    <!-- Best Sellers -->

    <div class="best_sellers">
    	@include('pages.inc.home.best_sellers')
    </div>

    <!-- Adverts -->

    <div class="adverts">
    	@include('pages.inc.home.adverts')
    </div>

    <!-- Trends -->

    <div class="trends">
        <div class="trends_background" style="background-image:url({{ asset('public/frontend/images/trends_background.jpg') }})"></div>
        <div class="trends_overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Trends Content -->
    			@include('pages.inc.home.trends_content')

                <!-- Trends Slider -->
    			@include('pages.inc.home.trends_sliders')

            </div>
        </div>
    </div>

    <!-- Reviews -->

    <div class="reviews">
    	@include('pages.inc.home.reviews')
    </div>

    <!-- Recently Viewed -->

    <div class="viewed">
    	@include('pages.inc.home.recently_viewed')
    </div>

    <!-- Brands-->

    <div class="brands">
    	@include('pages.inc.home.brands')
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
    	@include('pages.inc.home.newsletter')
    </div>
    
@endsection