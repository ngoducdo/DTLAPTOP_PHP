 @extends('master')
@section('content')
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href={{route('trang-chu')}}>Trang chủ</a></li>
				<li class="active"> / Tin Tức</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- MAIN -->
				<div id="main" class="col-md-8">
					<!-- store top filter -->
					<!-- /store top filter -->
					<h3 class="aside-title">Tin Tức</h3>
					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row" style="margin-left: 5px; font-family: 'Quicksand', sans-serif;">
							@foreach($tintuc as $news)
								<div class="news">
									<a href="{{route('chitiettin',$news->id)}}"><h4><?php echo $news['title'] ?></h4></a>
									<a href="{{route('chitiettin',$news->id)}}"><img src="images/tintuc/{{$news->image}}" width="250" height="150px;"></a>
									<?php echo substr($news['summary'],0,500); ?>
								</div>
								<hr style="margin: 0">
							@endforeach
						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
			
@endsection