@extends('front.main')



@section('content')



<div class="text_content">

        <section class="welcome subpage">

   

</section>    </div>



    

    <div class="text_content">

        <section class="image_text ">

            <div class="row flex">

            <div class="col-sm-6">

                <img src="{{ url('site/assets/files/2939/az.png') }}" alt="">

            </div>

            <div class="col-sm-6 align-self-center">

                                <h2>A’dan Z’ye İletişim</h2>

                

                <div class="text_body">

                <p>Kreatif, dijital pazarlama, sosyal medya, yazılım ve prodüksiyon ekiplerimiz markanızın iletişim ihtiyaçlarını karşılayacak tüm hizmetleri tek bir çatı altında sunuyor.</p>
                &emsp;&emsp;
				    
                    <ul>
                        <a href="{{ ('/hizmetler/markayonetimi') }}"><li>Marka Yönetimi</li></a>
                        <a href="{{ ('/hizmetler/dijitalpazarlama') }}"><li>Dijital Kampanyalar</li></a>
                        <a href="{{ ('/hizmetler/kreatiftasarim') }}"><li>Yaratıcı Konsept</li></a>
                        <a href="{{ ('/hizmetler/sosyalmedyayonetimi') }}"><li>Sosyal Medya Yönetimi</li></a>
                        <li>Basın Kampanyası</li>
                        <li>Kriz Yönetimi</li>
                        <li>Grafik Tasarım</li>
                        <li>Websitesi Tasarım ve Kodlama</li>
                        <li>Outdoor</li>
                        <a href="{{ ('/hizmetler/produksiyon') }}"><li>Fotoğraf ve Video Prodüksiyon</li></a>
                        <li>Gerilla Pazarlama</li>
                        <li>2D Animasyon</li>
                        <li>İçerik Pazarlama</li>
                        <a href="{{ ('/hizmetler/dijitalmedyaplanlama') }}"><li>Dijital Medya Planlama</li></a>
                    </ul>    

                </div>
            </div>

        </div>

            <div class="row flex">

 

        </div>

           

    </section>    </div>



    

</section>    </div>



@endsection