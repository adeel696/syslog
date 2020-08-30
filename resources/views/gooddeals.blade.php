@extends('layouts.app')
@section('content')



<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('{{ url('home/images/hero_2.jpg') }}">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Bonnes affaires</h1>
          <p>Les Meilleures offres du moment !</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section bg-light">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-0 site-color" id="catName">Bonnes affaires</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-0">
          <div class="container">
            <div class="row">
                @foreach(App\Models\Gooddeal::Where('country_id',$country_id)->Where('is_publish',1)->Get() as $Gooddeal)
                    <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Image-->
                            <figure> <img alt="" src="{{ url('media/gooddeals')."/".$Gooddeal->image }}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                <h2 style="color:#01ABC4 !important">{{ $Gooddeal->title }}</h2>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <h5 style="color:#01ABC4 !important">{{ utf8_encode(__('static.Description')) }}</h5>
                              <p>{{ $Gooddeal->description }}</p>
                            </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                @endforeach
			</div>
          </div>
        </div>
    </div>
</div>
@endsection