@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('home/img/bulkbuying.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-9 text-center">
            <h1>{{ utf8_encode(__("Amélioronsvos finances")) }}</h1><br>   
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section bg-light">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4" id="catName">Offers</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
        <div class="mt-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <img src="{{ url('home/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
              </div>
              <div class="col-lg-8">
                <h2>
                    <?php echo utf8_encode("Offer Name"); ?>
                </h2>
                <p><?php echo utf8_encode("Detail"); ?></p>
                <p><a href="{{ url('contact') }}">Subscribe</a></p>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
@push('scripts') 
<script>
	$("html, body").animate({ scrollTop: $('#contentDetail').offset().top-200 }, 600);
</script>
@endpush
