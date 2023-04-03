 <h1>Showcase</h1>

            <p id="subnav">Seçkin markalara sunduğumuz; marka konumlama, kurumsal kimlik, kullanıcı arayüzü, web sitesi tasarım ve uygulaması, sosyal medya yönetimi, e-ticaret site kurulum ve yönetimi, içerik yönetim sistemleri, uygulama geliştirme, dijital pazarlama, dijital medya planlama ve daha bir çok hizmet ile ilgili bize ulaşarak detaylı bilgi alabilir, içlerinden seçtiğimiz bir kaç örneği aşağıdan inceleyebilirsiniz.</p>

            <p></p>

            

<nav class="links-underline">

    

    	<a {{{ (Request::is('referanslar') ? 'class=active' : '') }}} href="{{ url('referanslar') }}">Tümü</a><span></span>

          

           @foreach($categories as $cat)         				

        

        <a  {{{ (Request::is('referanslar/'.$cat->slug) ? 'class=active' : '') }}} href="{{ url('referanslar/'.$cat->slug) }}">{{ $cat->name }}</a><span></span>



           @endforeach                       

</nav>