@extends('layouts.app')
@section('content')

{{-- <div class="container-fluid purple p-5 ma">

    <div class="d-flex justify-content-center">
            <blockquote class="blockquote text-center">
                    <p class="mb-0">سرویس ارائه خدمات گوناگون فضای مجازی</p>
                    <footer class="blockquote-footer">به زودی در خدمت شما خواهیم بود</footer>
                  </blockquote>
    </div>


    </div> --}}

    {{-- Header Start --}}
    <div class="headerbg mt-n4 pb-2">
    <div class="container pt-5">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/wp-banner.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>راهکارهای مبتنی بر وردپرس</h5>
                  <p>در کوتاه ترین زمان ، سیستم مبتنی بر مدیریت محتوای وردپرس را برای شما راه اندازی می کنیم</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="image/laravel-banner.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>پیاده سازی سایت حرفه ای با لاراول</h5>
                  <p>استفاد از یکی از قدترتمندترین تکنولوژی های سمت سرور برای ساخت نرم افزار تحت وب اختصاصی</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/id/230/1280/400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</div>
{{-- Header end --}}
{{--  ---- ----- -----  --}}

{{-- Specials start --}}
<div class="specials mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1 class="text-center">ویژگی خدمات ما</h1>
            </div>
            <div class="col-md-4 ">
                <div class="card animated fadeInUp mb-5">
                    <img src="image/24-7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">خدمات و پشتیبانی ما 24 ساعته و 7 روزه هفته برای شما فعال است</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-5 animated fadeInUp">
                <div class="card">
                    <img src="image/bestoffer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">بهترین پیشنهاد ها و مناسب ترین قیمت ها با حفظ بهترین کیفیت کار در انتظار شماست</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4  mb-md-5 animated fadeInUp">
                <div class="card">
                    <img src="image/fast.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">ما در سریع ترین زمان ممکن خدمات را به شما مــی رسانیم و در عین حال بهترین کیفیت ممکن را خدمت شما ارائه خواهیم کرد</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</div>
{{-- Specials end --}}
{{--  ---- ----- -----  --}}

{{-- Services --}}
<div class="specials mb-5 bluebell ">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1 class="text-center">خدمات ما</h1>
            </div>
            <div class="col-md-4 ">
                <div class="card animated fadeInUp mb-5">
                    <img src="image/24-7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">خدمات و پشتیبانی ما 24 ساعته و 7 روزه هفته برای شما فعال است</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-5 animated fadeInUp">
                <div class="card">
                    <img src="image/bestoffer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">بهترین پیشنهاد ها و مناسب ترین قیمت ها با حفظ بهترین کیفیت کار در انتظار شماست</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4  mb-md-5 animated fadeInUp">
                <div class="card">
                    <img src="image/fast.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">ما در سریع ترین زمان ممکن خدمات را به شما مــی رسانیم و در عین حال بهترین کیفیت ممکن را خدمت شما ارائه خواهیم کرد</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</div>

{{-- Services End --}}
{{--  ---- ----- -----  --}}
@endsection
