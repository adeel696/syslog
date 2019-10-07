@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('home/img/constructionbk.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-9 text-center">
            <h1>We can make it together</h1><br>      
            
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                     <div class="item">
                        <div class="pad15">
                            <a href="javascript:void(0)" class="hedrSel" data-val="truck" >
                                <span class="lead"><img class="zoomImg" src="{{ url('/home/img/truck.png') }}" style="width:100px"></span>
                                <p>Truck</p>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <a href="javascript:void(0)" class="hedrSel" data-val="shovel" >
                                <span class="lead"><img class="zoomImg" src="{{ url('/home/img/shovel.png') }}" style="width:100px"></span>
                                <p>Shovel</p>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <a href="javascript:void(0)" class="hedrSel" data-val="cement-mixer" >
                                <span class="lead"><img class="zoomImg" src="{{ url('/home/img/cement-mixer.png') }}" style="width:100px"></span>
                                <p>Cement mixer</p>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <a href="javascript:void(0)" class="hedrSel" data-val="crane" >
                                <span class="lead"><img class="zoomImg" src="{{ url('/home/img/crane.png') }}" style="width:100px"></span>
                                <p>Crane</p>
                            </a>
                        </div>
                    </div>
                    
                </div>
                <button class="leftLst">
                    <i class="fa fa-chevron-left fa-lg text-muted"></i>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="rightLst">
                    <i class="fa fa-chevron-right fa-lg text-muted"></i>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section bg-light">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4" id="catName">Category</h2>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-stretch" id="contentDetail">
        </div>
        <div class="col-12">
            <span class="p-3">1</span>
            <a href="#" class="p-3">2</a>
            <a href="#" class="p-3">3</a>
            <a href="#" class="p-3">4</a>
        </div>
    </div>
</div>
@endsection
@push('scripts') 
<script>
	$( ".hedrSel" ).click(function() {
		getData($(this).data("val"))
		$(window).scrollTop($('#contentDetail').offset().top-200)
	});
	
	getData('truck');
	function getData(type)
	{
		switch(type)
		{
			case "truck":
				$("#catName").html("Truck");
				var data = "";
				for(i=0; i<20; i++)
				{
					var data = data + '<div class="col-lg-3 col-md-6 mb-5">' +
							   '<div class="post-entry-1 h-100" style="background:#fff">' +
								  '<a href="#">' +
								  '<img src="{{ url("home/img/truck.png") }}" alt="Image" class="zoomImg img-fluid">' +
								 '</a>' +
								 '<div class="post-entry-1-contents">' +
									 '<a href="#">' +
										'<h2>Best Truck</h2>' +
									 '</a>' +
									 '<p>$10/Km</p>' +
									 '<a href="#" class="more">Book</a>' +
								  '</div>' +
							   '</div>' +
							'</div>';
				}
				$("#contentDetail").html(data)
			break;
			
			case "shovel":
				$("#catName").html("Shovel");
				var data = "";
				for(i=0; i<20; i++)
				{
					var data = data + '<div class="col-lg-3 col-md-6 mb-5">' +
							   '<div class="post-entry-1 h-100" style="background:#fff">' +
								  '<a href="#">' +
								  '<img src="{{ url("home/img/shovel.png") }}" alt="Image" class="zoomImg img-fluid">' +
								 '</a>' +
								 '<div class="post-entry-1-contents">' +
									 '<a href="#">' +
										'<h2>Best Shovel</h2>' +
									 '</a>' +
									 '<p>$10/Km</p>' +
									 '<a href="#" class="more">Book</a>' +
								  '</div>' +
							   '</div>' +
							'</div>';
				}
				$("#contentDetail").html(data)
			break;
			
			case "cement-mixer":
				$("#catName").html("Cement Mixer");
				var data = "";
				for(i=0; i<20; i++)
				{
					var data = data + '<div class="col-lg-3 col-md-6 mb-5">' +
							   '<div class="post-entry-1 h-100" style="background:#fff">' +
								  '<a href="#">' +
								  '<img src="{{ url("home/img/cement-mixer.png") }}" alt="Image" class="zoomImg img-fluid">' +
								 '</a>' +
								 '<div class="post-entry-1-contents">' +
									 '<a href="#">' +
										'<h2>Best Cement Mixer</h2>' +
									 '</a>' +
									 '<p>$10/Km</p>' +
									 '<a href="#" class="more">Book</a>' +
								  '</div>' +
							   '</div>' +
							'</div>';
				}
				$("#contentDetail").html(data)
			break;
			
			case "crane":
				$("#catName").html("Crane");
				var data = "";
				for(i=0; i<20; i++)
				{
					var data = data + '<div class="col-lg-3 col-md-6 mb-5">' +
							   '<div class="post-entry-1 h-100" style="background:#fff">' +
								  '<a href="#">' +
								  '<img src="{{ url("home/img/crane.png") }}" alt="Image" class="zoomImg img-fluid">' +
								 '</a>' +
								 '<div class="post-entry-1-contents">' +
									 '<a href="#">' +
										'<h2>Best Crane</h2>' +
									 '</a>' +
									 '<p>$10/Km</p>' +
									 '<a href="#" class="more">Book</a>' +
								  '</div>' +
							   '</div>' +
							'</div>';
				}
				$("#contentDetail").html(data)
			break;
		}
	}
</script>
@endpush