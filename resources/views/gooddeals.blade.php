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


@foreach(App\Models\Gooddeal::All() as $Gooddeal)
	<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="{{ url('media/gooddeals')."/".$Gooddeal->image }}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto">
            <h2>{{ $Gooddeal->title }}</h2>
            <p>{{ $Gooddeal->description }}</p>
          </div>
        </div>
      </div>
    </div>
@endforeach

@endsection