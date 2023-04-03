@extends('front.main')

@section('content')



    
    <div class="text_content">
        <div class="text_center">
    
    <h1>{{ $ref->name }}</h1>
    {!! $ref->text !!}
 <div class="text_center" style="text-align: center">
       <a rel="nofollow" style="font-size: 24px; color : #31a193" target="_blank" href="{{ $ref->link }}">Projeye Git <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
</div>
      </div>    
    </div>

    


    
    <div class="text_content">
        <section class="showcase-image">
            <img src="{{ url('uploads/references/'.$ref->image2) }}" alt="{{ $ref->name }}">
           
    </section>    </div>
   
@endsection