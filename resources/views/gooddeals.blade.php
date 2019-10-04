@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('{{ url('home/images/hero_2.jpg') }}">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Good Deals</h1>
          <p>Description</p>
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

<div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5 section-2-title">
      <div class="col-md-6">
        <span class="text-primary">Our Team</span>
        <h2 class="mb-4">Meet Our Team</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis provident eius ratione velit, voluptas laborum nemo quas ad necessitatibus placeat?</p>
      </div>
    </div>
    <div class="row align-items-stretch">

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="post-entry-1 h-100">
          <a href="#">
            <img src="{{ url('home/images/person_1.jpg') }}" alt="Image"
             class="img-fluid">
          </a>
          <div class="post-entry-1-contents">
            <span class="meta">Founder</span>
            <h2>James Doe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="post-entry-1 h-100">
          <a href="#">
            <img src="{{ url('home/images/person_2.jpg') }}" alt="Image"
             class="img-fluid">
          </a>
          <div class="post-entry-1-contents">
            <span class="meta">Founder</span>
            <h2>James Doe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="post-entry-1 h-100">
          <a href="#">
            <img src="{{ url('home/images/person_3.jpg') }}" alt="Image"
             class="img-fluid">
          </a>
          <div class="post-entry-1-contents">
            <span class="meta">Founder</span>
            <h2>James Doe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="post-entry-1 h-100">
          <a href="#">
            <img src="{{ url('home/images/person_4.jpg') }}" alt="Image"
             class="img-fluid">
          </a>
          <div class="post-entry-1-contents">
            <span class="meta">Founder</span>
            <h2>James Doe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="post-entry-1 h-100">
          <a href="#">
            <img src="{{ url('home/images/person_5.jpg') }}" alt="Image"
             class="img-fluid">
          </a>
          <div class="post-entry-1-contents">
            <span class="meta">Founder</span>
            <h2>James Doe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="post-entry-1 h-100">
          <a href="#">
            <img src="{{ url('home/images/person_1.jpg') }}" alt="Image"
             class="img-fluid">
          </a>
          <div class="post-entry-1-contents">
            <span class="meta">Founder</span>
            <h2>James Doe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
@endsection