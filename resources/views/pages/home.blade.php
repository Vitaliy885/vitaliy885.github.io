@extends('index')

@section('title')Home @endsection

@section('content')
    <!-- ? New Product Start -->
    <section class="new-product-area section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-70">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="/images/gallery/new_product1.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="/images/gallery/new_product2.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="/images/gallery/new_product3.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  New Product End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area">
        <div class="container-fluid p-0 fix">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img" style="background-image: url('/images/gallery/gallery1.png');"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img" style="background-image: url('/images/gallery/gallery2.png');"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url('/images/gallery/gallery3.png');"></div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url('/images/gallery/gallery4.png');"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
@endsection
