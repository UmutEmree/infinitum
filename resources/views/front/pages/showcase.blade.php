@extends('front.main')



@section('content')







        <div class="">



            

<div class="text_content">

        <section class="welcome subpage">

    <div class="row">

        <div class="col-sm-6 col-sm-push-6 right">

        <img src="../site/assets/files/1116/showcase.png">

        </div>

        <div class="col-sm-6 col-sm-pull-6 left">

          



            @include('front.partials.category')

                    </div>

    </div>

</section>    </div>

<section class="showcase">

    <div class="container-fluid">

        <div class="row">

                @foreach($references as $ref)

                <div class="col-sm-4 toAnim">

                    <a href="{{ url('referans/'.$ref->slug) }}">

                        <img src="{{ url('uploads/references/'.$ref->image) }}" alt="{{ $ref->name }}">

                        <div class="overlay"></div>

                    </a>

                    <div>

                        <h2>

                            <a href="{{ url('referans/'.$ref->slug) }}">

                                {{ $ref->name }}                            

                            </a>

                        </h2>

                        {!! str_limit($ref->text,250) !!}                 

                    </div>

                </div>

                @endforeach







    </div>

    {{ $references->links() }}

</section>





<div class="browser-screen-loading-content">

    <div class="loading-dots dark-gray">

        <i></i>

        <i></i>

        <i></i>

        <i></i>

    </div>

</div>







</html>



@endsection



