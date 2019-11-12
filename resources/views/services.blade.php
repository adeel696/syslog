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
        	<?php echo utf8_encode("Location véhicule de transport"); ?>
        </h2>
        <p><?php echo utf8_encode("Nous vous louons des véhicules de tout type pour le transport de vos produits et marchandises . Vous pourrez utiliser ces actifs à votre guise dans le respect des conditions et clauses convenues."); ?></p>
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
        <p><?php echo utf8_encode("Vous pourrez auprès de nos services louer des engins pour des travaux divers. En l'occurrence nous disposons d'engins de chantier tels que des compacteurs , pelleteuses , chargeurs ,Bull , décapeuses , etc.  et d'engins de manutention divers ( chariots élévateurs , grues , etc.)"); ?></p>
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
        <p><?php echo utf8_encode("SYSLOG assure le transport de vos marchandises et produits dans le respect des normes HSEQ de niveau international garantissant ainsi la sécurité et la viabilité des opérations."); ?></p>
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
        	<?php echo utf8_encode("Déménagement"); ?>
        </h2>
        <p><?php echo utf8_encode("Pour vos besoins de déménagement urbain, inter interurbains et internationaux , nous mettons à votre disposition plusieurs types de véhicules avec des tarifs compétitifs tout en vous garantissant un service sécurisé et de qualité"); ?></p>
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
        <p><?php echo utf8_encode("Vous avez des camions ou engins divers, vous avez des difficultés d'exploitation notamment de gestion et des difficultés commerciales ou opérationnelles, N'attendez pas! en nous contactant pour la gestion de vos actifs. Notre objectif est d'optimiser la rentabilité, l'utilisation et la préservation de vos engins."); ?></p>
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
        <p><?php echo utf8_encode("Nous mettons à votre disposition des espaces d'entreposages de vos produits selon vos besoins. Il pourrait s'agir d'entrepôts entiers que vous désireriez louer ou des espaces à la carte dans des entrepôts. Nous vous aidons ainsi à réduire les coûts de stockage en optimisant les frais opérationnels par une offre d'espace sur mesure. A partir de 10 m2"); ?></p>
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
        	<?php echo utf8_encode("Achats groupés"); ?>
        </h2>
        <p><?php echo utf8_encode("Notre service d'achats groupés vous permettra de réduire vos coûts d'acquisitions des assurances, de lubrifiants et de pièces détachés."); ?></p>
    	<p><?php echo utf8_encode("Nous mutualisons les besoins  et du fait de l'échelle nous avons des tarifs négociés et très compétitifs dont pour pourriez bénéficier."); ?></p>
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
        	<?php echo utf8_encode("Comment ça marche?"); ?>
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