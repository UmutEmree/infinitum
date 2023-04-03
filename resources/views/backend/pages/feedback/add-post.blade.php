 @extends('backend.main')

  @section('css')

       <link href="{{ url('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->

    <link href="{{ url('backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- NProgress -->

    <link href="{{ url('backend/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- iCheck -->

    <link href="{{ url('backend/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->

    <link href="{{ url('backend/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">

    <!-- Select2 -->

    <link href="{{ url('backend/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">

    <!-- Switchery -->

    <link href="{{ url('backend/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">

    <!-- starrr -->

    <link href="{{ url('backend/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->

    <link href="{{ url('backend/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">



    <!-- Custom Theme Style -->

    <link href="{{ url('backend/build/css/custom.min.css') }}" rel="stylesheet">

  @endsection

  @section('content')

      <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Feedback Ekle</h3>

              </div>



              

            </div>

            <div class="clearfix"></div>

           

            <div class="row">

              <div class="col-md-6 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Feedback <small>İçerikleri </small></h2>



                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                    <br />

                    <form action="{{ route('feedbacks.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left input_mask">

                        {{ csrf_field() }}

                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="name" value="{{ old('name') }}"  placeholder="Başlık">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                      </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="title" value="{{ old('title') }}" required placeholder="Ünvan">

                        <span class="fa fa-code form-control-feedback left" aria-hidden="true"></span>

                      </div>                                         



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                          <select name="feedback_id" class="form-control">

                          @foreach($feedbacks as $feedback)

                            <option value="{{ $feedback->id }}">{{ $feedback->name }}</option>

                          @endforeach

                          </select>

                        </div>                                                         



                   <div class="form-group">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                          <div class="">

                            <label>

                              <input type="hidden" name="home" value="0">

                              <input type="checkbox" class="js-switch" name="home" value="1"   />Anasayfada Göster

                            </label>

                          </div>

                         </div>

                      </div>                   

                

                  </div>

                </div>



               

  @if(count($errors)>0)

                      <ul>

                        @foreach($errors->all() as $error)

                        <li class="alert alert-danger">{{ $error }}</li>

                        @endforeach

                      </ul>

                      @endif

           

              </div>



              <div class="col-md-6 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Feedback Detayı <small>Feedback detay bilgileri</small></h2>

                    

                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                    <br />



                         <textarea name="text" id="editor1"></textarea>



                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                          <button type="submit" class="btn btn-success">Ekle</button>

                        </div>

                      </div>



                    </form>

                  </div>

                </div>

              </div>





            

            </div>



        



          





          </div>

        </div>

  @endsection



  @section('js')

     <script>

            CKEDITOR.replace( 'editor1' );

        </script>

    <script src="{{ url('backend/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap -->

    <script src="{{ url('backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- FastClick -->

    <script src="{{ url('backend/vendors/fastclick/lib/fastclick.js') }}"></script>

    <!-- NProgress -->

    <script src="{{ url('backend/vendors/nprogress/nprogress.js') }}"></script>

    <!-- bootstrap-progressbar -->

    <script src="{{ url('backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>

    <!-- iCheck -->

    <script src="{{ url('backend/vendors/iCheck/icheck.min.js') }}"></script>

    <!-- bootstrap-daterangepicker -->

    <script src="{{ url('backend/vendors/moment/min/moment.min.js') }}"></script>

    <script src="{{ url('backend/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- bootstrap-wysiwyg -->

    <script src="{{ url('backend/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>

    <script src="{{ url('backend/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>

    <script src="{{ url('backend/vendors/google-code-prettify/src/prettify.js') }}"></script>

    <!-- jQuery Tags Input -->

    <script src="{{ url('backend/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>

    <!-- Switchery -->

    <script src="{{ url('backend/vendors/switchery/dist/switchery.min.js') }}"></script>

    <!-- Select2 -->

    <script src="{{ url('backend/vendors/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- Parsley -->

    <script src="{{ url('backend/vendors/parsleyjs/dist/parsley.min.js') }}"></script>

    <!-- Autosize -->

    <script src="{{ url('backend/vendors/autosize/dist/autosize.min.js') }}"></script>

    <!-- jQuery autocomplete -->

    <script src="{{ url('backend/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>

    <!-- starrr -->

    <script src="{{ url('backend/vendors/starrr/dist/starrr.js') }}"></script>

    <!-- Custom Theme Scripts -->

    <script src="{{ url('backend/build/js/custom.min.js') }}"></script>

  @endsection