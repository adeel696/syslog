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


<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="{{ url('home/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-4 ml-auto">
        <h2>Our History</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit suscipit, repudiandae similique accusantium eius nulla quam laudantium sequi.</p>
        <p>Debitis voluptates corporis saepe molestias tenetur ab quae, quo earum commodi, laborum dolore, fuga aliquid delectus cum ipsa?</p>
      </div>
    </div>
  </div>
</div>


<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
        <img src="{{ url('home/images/hero_2.jpg') }}" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-4 mr-auto">
        <h2>Competitive Company</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit suscipit, repudiandae similique accusantium eius nulla quam laudantium sequi.</p>
        <p>Debitis voluptates corporis saepe molestias tenetur ab quae, quo earum commodi, laborum dolore, fuga aliquid delectus cum ipsa?</p>
      </div>
    </div>
  </div>
</div>

@endsection