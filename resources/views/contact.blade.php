@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('{{ url('home/images/hero_2.jpg') }}">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>{{ utf8_encode(__('static.Contact')) }}</h1>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light" id="contact-section">
  <div class="container">
    
    <div class="row">
      <div class="col-lg-8 mb-5" >
        <form action="#" method="post">
          <div class="form-group row">
            <div class="col-md-6 mb-4 mb-lg-0">
              <input type="text" class="form-control" placeholder="{{ utf8_encode('Nom') }}">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="{{ utf8_encode('Pr�nom') }}">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Email">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <textarea name="" id="" class="form-control" placeholder="Message" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 mr-auto">
              <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Envoyer le message">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4 ml-auto">
        <div class="bg-white p-3 p-md-5">
          <h3 class="text-black mb-4">Informations de contact</h3>
          <ul class="list-unstyled footer-link">
            <li class="d-block mb-3">
              <span class="d-block text-black">Adresse:</span>
              <span>{{ utf8_encode("17 , rue Albert TOE, Non loin de l'�glise Centre International d'�vang�lisation (DASASGHO) 01 BP 1426 Ouagadougou") }}</span></li>
            <li class="d-block mb-3"><span class="d-block text-black">{{ utf8_encode('T�l�phone') }}:</span><span>00226 25 65 65 47</span></li>
            <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>operations@noveogroup.com</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection