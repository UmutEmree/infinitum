@extends('front.main')



@section('content')        



<div class="text_content">

        <section class="welcome">

    <div class="row">

        <div class="col-sm-6 col-sm-push-6 right">

            <img src="{{ url('site/assets/files/1117/ica.png') }}">

        </div>

        <div class="col-sm-6 col-sm-pull-6 left">

            <h2 class="animated fadeIn" style="margin-bottom: 0;color: #333">Infinitum </h2>

            <h2 class="animated fadeIn" style="font-weight: normal;font-size: 50px;color:#333"><font style="color: #5cb1a7">Creative</font> Agency </h2>



            <p class="animated fadeIn"> Infinitum Creative Agency ekibi alışılagelmiş kalıpların dışına çıkarak, yaratıcı işler üretmek üzere bir araya gelmiş bir ekiptir. Markanızı, gerek konvansiyonel gerek dijital mecralarda en iyi şekilde temsil etmeyi hedefleyen yeni nesil iletişim ajansıdır.<br>
                                        
            </p>


            <a class="animated fadeIn" href="{{ ('/hizmetler') }}">Hizmetlerimize Bir Göz Atın <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>

            <a class="animated fadeIn" href="{{ ('/iletisim') }}">Teklif Alın! <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>

        </div>

        <span class="icon-scroll">

            <span></span>

        </span>

    </div>

</section>    </div>



    

    <div class="text_content">

        <section class="image_text ">

            <div class="row flex">

            <div class="col-sm-6">

                <img src="{{ url('site/assets/files/2937/fikirler.png') }}" alt="">

            </div>

            <div class="col-sm-6 align-self-center">

                                <h2>Bütünleşik Fikirler</h2>

                

                <div class="text_body">

                



                <p>Infinitum Creative Agency arkanıza sonuç odaklı yaratıcı çözümler sunar.
                Bütünleşik kampanyalar kurgular, içerikler üretir.</p>
                <br>
                <p>Peki neler mi yapıyoruz?<br>
                Sosyal medyadan, dijital pazarlamaya... Reklam kampanyasından,
                dijital itibar yönetimine... Monitoringden, video prodüksiyona... Mecralarında uzman ekibimizle, mecra bağımsız çözümler sunuyoruz.
                </p>



                </div>



                <span class="break"></span>



                

                                <a href="{{ ('/hizmetler') }}" class="view">Hizmetlerimize Bir Göz Atın <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>                            </div>

        </div>

            



                <span class="break"></span>                

        

        </div>

    </section> </div>



    <div class="text_content">

        <section class="two_products">

    <div class="row">



        @foreach($ref as $ref)

        <div class="col-sm-6 ">

            

            <a href="{{ url('referans/'.$ref->slug) }}">

                <img src="{{ url('uploads/references/'.$ref->image) }}" alt="The Camden Collection">

            </a>



            <div class="container-both">

                <strong>

                   <a href="{{ url('referans/'.$ref->slug) }}">{{$ref->name}}</a>

                </strong>

              {!! $ref->text !!}

                   <a href="{{ url('referans/'.$ref->slug) }}">Referansı İncele <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>

              

            </div>



        </div>

        @endforeach



        

        

    </div>

</section>    </div>



    

    <div class="text_content">

        <section class="testamonials">

    <div>

        <div class="carousel">

               
                @foreach($feedbacks as $feedback)
                <div>

                    {!! $feedback->text !!}
 
                    <strong>{{ $feedback->name }}</strong>

                    <small>{{ $feedback->title }}</small>

                </div>
                @endforeach
                           

                    </div>

    </div>

</section>    </div>



    

    <div class="text_content">

        <section class="brands">

                  
                    @foreach($partners as $partner)
                    <div>

                        <img src="{{ url('uploads/partners/'.$partner->image ) }}" alt="{{ $partner->name }}">

                    </div>
                    @endforeach
         

            </section>    </div> 

        

@endsection