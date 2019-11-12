@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('{{ url('home/images/hero_3.jpg') }}">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Prestations de service</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="mt-5">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8">
        <h2>
        	<?php echo utf8_encode("Location v�hicule de transport"); ?>
        </h2>
        <p><?php echo utf8_encode("Nous vous louons des v�hicules de tout type pour le transport de vos produits et marchandises . Vous pourrez utiliser ces actifs � votre guise dans le respect des conditions et clauses convenues."); ?></p>
        <p><a href="{{ url('contact') }}">Pour plus information veuillez nous contacter au</a></p>
      </div>
    </div>
  </div>
</div>

<div class="mt-5">
  <div class="container">
    <div class="row">
      <!--<div class="col-lg-4">
        <img src="{{ url('home/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
      </div>-->
      <div class="col-lg-8">
        <h2>
        	<?php echo utf8_encode("Location d'engins divers"); ?>
        </h2>
        <p><?php echo utf8_encode("Vous pourrez aupr�s de nos services louer des engins pour des travaux divers. En l'occurrence nous disposons d'engins de chantier tels que des compacteurs , pelleteuses , chargeurs ,Bull , d�capeuses , etc.  et d'engins de manutention divers ( chariots �l�vateurs , grues , etc.)"); ?></p>
        <p><a href="{{ url('contact') }}">Pour plus information veuillez nous contacter au</a></p>
      </div>
    </div>
  </div>
</div>

<div class="mt-5">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8">
        <h2>
        	<?php echo utf8_encode("Transport de Marchandises et produits divers"); ?>
        </h2>
        <p><?php echo utf8_encode("SYSLOG assure le transport de vos marchandises et produits dans le respect des normes HSEQ de niveau international garantissant ainsi la s�curit� et la viabilit� des op�rations."); ?></p>
        <p><a href="{{ url('contact') }}">Pour plus information veuillez nous contacter au</a></p>
      </div>
    </div>
  </div>
</div>

<div class="mt-5">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8">
        <h2>
        	<?php echo utf8_encode("D�m�nagement"); ?>
        </h2>
        <p><?php echo utf8_encode("Pour vos besoins de d�m�nagement urbain, inter interurbains et internationaux , nous mettons � votre disposition plusieurs types de v�hicules avec des tarifs comp�titifs tout en vous garantissant un service s�curis� et de qualit�"); ?></p>
        <p><a href="{{ url('contact') }}">Pour plus information veuillez nous contacter au</a></p>
      </div>
    </div>
  </div>
</div>

<div class="mt-5">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8">
        <h2>
        	<?php echo utf8_encode("Gestion de flotte"); ?>
        </h2>
        <p><?php echo utf8_encode("Vous avez des camions ou engins divers, vous avez des difficult�s d'exploitation notamment de gestion et des difficult�s commerciales ou op�rationnelles, N'attendez pas! en nous contactant pour la gestion de vos actifs. Notre objectif est d'optimiser la rentabilit�, l'utilisation et la pr�servation de vos engins."); ?></p>
        <p><a href="{{ url('contact') }}">Pour plus information veuillez nous contacter au</a></p>
      </div>
    </div>
  </div>
</div>

<div class="mt-5">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8">
        <h2>
        	<?php echo utf8_encode("Location d'espace d'entreposage"); ?>
        </h2>
        <p><?php echo utf8_encode("Nous mettons � votre disposition des espaces d'entreposages de vos produits selon vos besoins. Il pourrait s'agir d'entrep�ts entiers que vous d�sireriez louer ou des espaces � la carte dans des entrep�ts. Nous vous aidons ainsi � r�duire les co�ts de stockage en optimisant les frais op�rationnels par une offre d'espace sur mesure. A partir de 10 m2"); ?></p>
        <p><a href="{{ url('contact') }}">Pour plus information veuillez nous contacter au</a></p>
      </div>
    </div>
  </div>
</div>

<div class="mt-5">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8">
        <h2>
        	<?php echo utf8_encode("Achats group�s"); ?>
        </h2>
        <p><?php echo utf8_encode("Notre service d'achats group�s vous permettra de r�duire vos co�ts d'acquisitions des assurances, de lubrifiants et de pi�ces d�tach�s."); ?></p>
    	<p><?php echo utf8_encode("Nous mutualisons les besoins  et du fait de l'�chelle nous avons des tarifs n�goci�s et tr�s comp�titifs dont pour pourriez b�n�ficier."); ?></p>
        <p><a href="{{ url('contact') }}">Pour plus information veuillez nous contacter au</a></p>
      </div>
    </div>
  </div>
</div>

<div class="mt-5">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <center><h2>
        	<?php echo utf8_encode("Comment �a marche?"); ?>
        </h2></center>
       </div> 
       <div class="col-lg-2"></div>
       <div class="mt-5"></div>
       <div class="col-lg-2"></div>
       <div class="col-lg-8">
       	<center><img src="{{ url('home/services.png') }}" width="100%"/></center>
       </div>
      </div>
    </div>
  </div>
</div>

<div class="mb-5"></div>
@endsection