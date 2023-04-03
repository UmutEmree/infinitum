            <footer>

                <div class="container">

                    <div class="row">

                        <div class="address" style="padding-right:0">

                                                        <h4>Infinitum Creative Agency</h4>

                            <p>Barbaros Mah.</p>

                            <p>Mustafa Pehlivan Sokak 19/2</p>

                            <p>Koşuyolu / İstanbul</p>

                            <a href="mailto:info@infinitumagency.com">info@infinitum.com.tr</a>

                            <a class="telephone" href="tel:0216 510 44 20">0216 510 44 20</a>

                        </div>                        

                        <div class="social media">

                            <div class="socials">

                                                            <a target="_blank" href="https://www.facebook.com/infinitumcreativeagency"><i class="fa fa-facebook"></i></a>

                                                            <a target="_blank" href="https://www.instagram.com/infinitumagency"><i class="fa fa-instagram"></i></a>

                                                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>

                                                            </div>

                            <form method="post" action="#">

                                <input type="email" placeholder="E-Bültene Kayıt Olun" name="email" required>

                                <input type="submit" name="newsletter">

                            </form>

                        </div>

                        

                         

                    </div>

                </div>

            </footer>



        </div>



        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

        <script src="{{ url('site/templates/js/build.js') }}"></script>

        <script>//<![CDATA[

$(document).ready(function(){var timer;var width=$(window).width();if($('.infinity-links').length>0&&$('.infinity-links a').length>0){var counter;var sum=$('.infinity-links a').length+1;var items=$('.infinity-links a');if($('a.current').length>0){co=parseInt($('a.current').text());counter=co+1;}else{counter=items.eq(0).text();}var url=items.eq(0).attr('href');var thenum=url.replace(/[0-9]/g,'').replace(/\/$/,'');$(window).on("scroll",function(){if(timer){window.clearTimeout(timer);}timer=window.setTimeout(function(){if($(window).scrollTop()>=$(document).height()-$(window).height()-500){if(counter>sum){return false;}else{getData(counter);counter++;}}},200);});function getData(count){$.ajax({url:thenum+count+'/',dataType:"html",tryCount:0,retryLimit:3,beforeSend:function(){$('.browser-screen-loading-content').css('opacity','1')},success:function(data){$('.browser-screen-loading-content').css('opacity','0')

var result=$('<div />').append(data).find('.showcase').find('h2').addClass('ani anim3 animated slideInUp').addBack().find('p').addClass('ani anim3 animated slideInUp').addBack().find('img').addClass('ani custom2 animated fromDown').addBack().find('.overlay').addClass('overlay ani custom1 animated fromDownHide').addBack().html();setTimeout(function(){$(result).appendTo('.showcase');},300);if((width>1024)){setTimeout(function(){$("html").getNiceScroll().resize();$("html").getNiceScroll().remove();$("div[id^='ascrail']").remove();jQuery("html").niceScroll({cursorcolor:'#5eeef0',cursorborder:'none',horizrailenabled:false,autohidemode:false,});},900);}},error:function(xhr,textStatus,errorThrown){if(textStatus=='timeout'){this.tryCount++;if(this.tryCount<=this.retryLimit){$.ajax(this);return;}return;}if(xhr.status==500){}else{}}});}}});

//]]></script>



    </body>





</html>