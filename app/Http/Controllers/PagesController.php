<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Reference;
use App\Partner;
use App\Feedback;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    public function index(){

    	$ref = Reference::where('home',1)->limit(2)->get();
    	$partners = Partner::orderby('id','desc')->get();
    	$feedbacks = Feedback::orderby('id','desc')->get();
		return view('front.pages.home')->with(compact('ref','partners','feedbacks'));
	}

	public function refdetail($slug){ 

		$ref = Reference::where('slug',$slug)->first();

    	return view('front.pages.referans')->with(compact('ref'));
    	
    }

		public function showcase(){

			$references = Reference::orderby('id','desc')->paginate(9);


			return view('front.pages.showcase')->with(compact('references'));
		}

		public function showcaseCat($slug){

			$references = Reference::where('category_id',$slug)->paginate(9);

			return view('front.pages.showcase-cat')->with(compact('references'));

	}

	public function hizmetler(){

		return view('front.pages.hizmetler');
	}

	public function blog(){

		return view('front.pages.blog');
	}

	public function iletisim(){

		return view('front.pages.iletisim');
	}
	
	public function markayonetimi(){

		return view('front.pages.services.markayonetimi');
	}

	public function webtasarim(){

		return view('front.pages.services.webtasarim');
	}

	public function dijitalpazarlama(){

		return view('front.pages.services.dijitalpazarlama');
	}

	public function sosyalmedyayonetimi(){

		return view('front.pages.services.sosyalmedyayonetimi');
	}

	public function kurumsalkimlik(){

		return view('front.pages.services.kurumsalkimlik');
	}

	public function kreatiftasarim(){

		return view('front.pages.services.kreatiftasarim');
	}

	public function produksiyon(){

		return view('front.pages.services.produksiyon');
	}

	public function dijitalmedyaplanlama(){

		return view('front.pages.services.dijitalmedyaplanlama');
	}
	// aşağısı formu direk mail adresine göndermek için gerekli kod
	 public function contactSend(Request $request){
			
			 $input = Input::except('_method', '_token');
			
			
			  Mail::send('emails.contact', $input, function($message) use ($input)
            {
                $message->from('info@infinitumagency.com', "İletişim Formu");
                $message->subject($input['isim'].' '.$input['soyisim']." - İletişim Talep Formu");
                $message->to('info@infinitumagency.com');
            });
			
		 return redirect('iletisim')->with('status', 'Mesajınız Gönderildi! EN Kısa Sürede Tarafınıza Dönüş Sağlanacaktır.');

    }
    

}