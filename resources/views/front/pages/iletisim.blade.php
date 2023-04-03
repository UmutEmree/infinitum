@extends('front.main')



@section('content')



<div class="service_detail">

<section class="welcome contact">

    <div class="row">

        <div class="col-sm-5 col-sm-push-7 right">

            <img src="{{ url('site/assets/files/2087/contact.png') }}" alt="showcase">

        </div>



        <div class="col-sm-7 col-lg-pull-5 left contact-form">

            <div class="row">

                                <div class="col-lg-6">

                    <h1>Infinitum Creative Agency</h1>

                    <a href="mailto:info@infinitumagency.com">info@infinitum.com.tr</a><br>

                    <a class="telephone" href="tel:0216 510 44 20">0216 510 44 20</a>

                </div>

                               

                

                            </div>

            <div class="row">

                <form method="post" id="dropzone" enctype="multipart/form-data" action="{{ route('iletisim') }}">

                    {{ csrf_field () }}



                    <div class="col-lg-4 col-md-6 col-xs-6">

                        <label>İsim <span>*</span> </label>

                        <input name="isim" type="text" id="isim" value="" required="" class="required">

                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-6">

                        <label>Soyisim <span>*</span></label>

                        <input name="soyisim" type="text" id="soyisim" value="" required="" class="required">

                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-6">

                        <label>Email <span>*</span></label>

                        <input name="email" type="email" id=email value="" required="" class="required">

                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-6">

                        <label>İletişim Numarası<span>*</span></label>

                        <input name="iletisimnumarasi" type="text" id="iletisimnuamarsi" required="" value="" class="required">

                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-6">

                        <label>Şirket</label>

                        <input name="sirket" type="text" id="sirket" value="" class="required">

                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-6">

                        <label>Sizin Web Adresiniz</label>

                        <input name="url" type="text" id="url" value="" class="">

                    </div>

                    <!--<div class="col-lg-6 col-md-6 col-xs-6 max-on-mobile">-->

                    <div class="col-lg-12 max-on-mobile">

                        <label>Bizden Nasıl Haberiniz Oldunuz?</label>

                        <input name="nasilhaberinizoldu" type="text" id="nasilhaberinizoldu" value="" class="">

                    </div>

                    <!--

                    <div class="col-lg-6 col-md-6 col-xs-6 max-on-mobile load" id="drop-zone">

                        <label>Upload Brief</label>

                        <label id="upload-zone" for="file-upload" class="custom-file-upload">Browse or Drag & Drop</label>

                        <input type="file" class="custom-file-upload" name="brief" id="ufile" multiple>

                        <div id="output">

                            <ul></ul>

                        </div>

                    </div>

                    -->

                    <div class="col-xs-12">

                        <label>Mesaj <span></span></label>

                        <textarea name="mesaj" id="mesaj" class="required"></textarea>

                    </div>

                                        

                    <div class="col-xs-12">

                        <input type="hidden" name="time" value="1514455691">

                        <input id="contactSent" type="submit" value="Gönder" name="contact">

                        <div class="loading-spinner" style="opacity:1 !important">

                            @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

                        </div>

                    </div>

                </form>

            </div>

        </div>



    </div>

</section>

</div>



<section class="map-detail">

<div class="container-both">

    <div class="row">

        <div class="col-sm-6">

            <h4>Ofis Adresimiz</h4>

        </div>

        <div class="col-sm-6">

            <div class="row second">

                                <div class="col-xs-6">

                    <p>Infinitum Creative Agency</p>

                     <p>Barbaros Mah.</p>

                            <p>Mustafa Pehlivan Sokak 19/2</p>

                            <p>Koşuyolu / İstanbul</p>

            </div>

                            </div>

        </div>

    </div>

</div>

</section>



<div class="maps">

    <div class="map" id="gmap_canvas1" style=" height:640px;width:100%;border: 30px solid white;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5057.796854702118!2d29.085474450521815!3d41.08245577028127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caca2dde4a88f3%3A0x9c1ec7527836d7eb!2sInfinitum+Creative+Agency!5e0!3m2!1str!2str!4v1515155389822" width="100%" height="640" frameborder="0" style="border:0" allowfullscreen></iframe></div>







@endsection