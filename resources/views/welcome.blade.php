@extends('layouts.app')

@section('content')

<section class="hero_single version_4">
			<div class="wrapper">
				<div class="container">
					<h3>Find what you need!</h3>
					<p>Explore the buzzing business landscape on your campus</p>
					<form method="post" action="grid-listings-filterscol.html">
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="What are you looking for...">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
                                    <select class="wide">
                                        <option>Ashesi</option>	
                                        <option>UG</option>
                                        <option>UPSA</option>
                                        <option>Winscosin</option>
                                    </select>
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide">
									<option>All Categories</option>	
									<option>Food</option>
									<option>Clothes</option>
									<option>Jewelry</option>
									<option>Shoes</option>
									<option>Electronics</option>
                                    <option>Fitness</option>
                                    <option>Beauty</option>
								</select>
							</div>
							<div class="col-lg-2">
								<input type="submit" value="Search">
							</div>
						</div>
						<!-- /row -->
					</form>
					<ul class="counter">
						<li><strong>256,020</strong> Locations</li>
						<li><strong>150,543</strong> Active users</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- /hero_single -->	

		<div class="container-fluid margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Popular listings</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
            @foreach ($products as $prod)	
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="detail-restaurant.html" class="wish_bt"></a>
							<a href="detail-restaurant.html"><img src="https://res.cloudinary.com/victoryunusa/image/upload/w_300,h_200,g_face,c_fill/w_80,g_south_east,x_5,y_5,l_mart_icon/{{$prod->image}}.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Read more</span></div></a>
							<small>{{$prod->category}}</small>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-restaurant.html">{{$prod->item_name}}</a></h3>
							<p>{{$prod->description}}</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">Now Open</span></li>
							<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
			@endforeach
			</div>
			<!-- /carousel -->
			<div class="container">
				<div class="btn_home_align"><a href="grid-listings-filterscol.html" class="btn_1 rounded">View all</a></div>
			</div>
			<!-- /container -->
		</div>
		<!-- /container -->
		
		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Popular Categories</h2>
					<p></p>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-6">
						<a href="row-listings-filterscol.html" class="box_cat_home">
							<i class="icon_menu-circle_alt"></i>
							<img src="img/icon_home_1.svg" width="65" height="65" alt="">
							<h3>Food</h3>
							<ul>
								<li><strong>1240</strong>Businesses</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="row-listings-filterscol.html" class="box_cat_home">
							<i class="icon_menu-circle_alt"></i>
							<img src="img/icon_home_2.svg" width="65" height="65" alt="">
							<h3>Clothes</h3>
							<ul class="clearfix">
								<li><strong>345</strong>Businesses</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="row-listings-filterscol.html" class="box_cat_home">
							<i class="icon_menu-circle_alt"></i>
							<img src="img/icon_home_3.svg" width="65" height="65" alt="">
							<h3>Beauty</h3>
							<ul class="clearfix">
								<li><strong>452</strong>Businesses</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="row-listings-filterscol.html" class="box_cat_home">
							<i class="icon_menu-circle_alt"></i>
							<img src="img/icon_home_4.svg" width="65" height="65" alt="">
							<h3>Jewelry</h3>
							<ul class="clearfix">
								<li><strong>211</strong>Businesses</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="row-listings-filterscol.html" class="box_cat_home">
							<i class="icon_menu-circle_alt"></i>
							<img src="img/icon_home_5.svg" width="65" height="65" alt="">
							<h3>Electronics</h3>
							<ul class="clearfix">
								<li><strong>146</strong>Businesses</li>
							</ul>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="row-listings-filterscol.html" class="box_cat_home">
							<i class="icon_menu-circle_alt"></i>
							<img src="img/icon_home_6.svg" width="65" height="65" alt="">
							<h3>Fitness</h3>
							<ul class="clearfix">
								<li><strong>345</strong>Businesses</li>
							</ul>
						</a>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->	
		</div>
		<!-- /bg_color_1 -->
		
		<div class="call_section image_bg">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
						<span><em></em></span>
						<h2>How it Works</h2>
						<p></p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="box_how wow">
								<i class="pe-7s-search"></i>
								<h3>Search products</h3>
								<p>Look up what you are trying to find.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-info"></i>
								<h3>View product/business Info</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-like2"></i>
								<h3>Book, Reach or Call</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="register.html" class="btn_1 rounded">Register Now</a></p>
				</div>
			</div>
			<!-- /wrapper -->
		</div>
        <!--/call_section-->
@endsection