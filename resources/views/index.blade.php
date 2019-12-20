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
<div class="headerbg mt-n4 pb-2">
    <div class="container pt-5">
        <div class="jumbotron pt-5 text-right animated fadeInRight shadow">
            <div class="container p-5">
              <h1 class="display-6">آغازین سخن با شما</h1>
              <p class="lead text-right">
                ما اینجا هستیم تا به شما کمک کنیم ایده ها و باورهایتان را در فضای مجازی به واقعیت تبدیل کنید و در این راه افتخار می کنیم که متعهد به همکاری و مشارکت دراز مدت با شما باشیم
              </p>
            </div>
            <div class="row ">
                <div class="col-12 text-center">
                        <div class="d-inline p-4"><i class="fab fa-instagram fa-4x"></i></div>
                        <div class="d-inline p-4"><i class="fab fa-dev fa-4x"></i></div>
                        <div class="d-inline p-4"><i class="fas fa-video fa-4x"></i></div>
                        <div class="d-inline p-4"><i class="fas fa-file-code fa-4x"></i></div>
                </div>
            </div>

          </div>
    </div>
</div>
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
@endsection
