@extends('layouts.app')



@section('content')
<div class="sub_header_in">
		<div class="container">
			<h1>{{ config('app.name', 'Ashesiapp') }}</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->
<div class="container margin_60">

    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add listing</li>
      </ol>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>ADD ITEM</h2>
            </div>
        <form method="POST" action="{{url('/save-item')}}" enctype="multipart/form-data">
        @csrf
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Name of the item</label>
						<input type="text" name="name" class="form-control" placeholder="eg. Doughman Doughnuts">
					</div>
				</div>
				
            </div>
            <div class="row">
            <div class="col-md-6">
					<div class="form-group">
						<label>Category</label>
						<div class="styled-select">
						<select name="category">
							<option value="food">Food</option>
							<option value="clothes">Clothes</option>
							<option value="electronics">Electronics</option>
                            <option value="shoes">Shoes</option>
                            <option value="jewellery">Jewellery</option>
                            <option value="makeup">MakeUp</option>
						</select>
						</div>
					</div>
				</div>
            </div>  
            <!-- /row-->
            <div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Description</label>
						<textarea type="text" name="description" class="form-control" placeholder=" eg. usage, requirements,etc.."></textarea>
					</div>
				</div>
            </div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Pricing</label>
						<input type="text" name="price" class="form-control" placeholder="eg 20.00">
					</div>
				</div>
            </div>
        
            
            
            <div class="row">
            <div class="col-md-6">
					<div class="form-group">
						<label>Sell online?</label>
						<div class="styled-select">
						<select name="sell">
							<option value="yes">YES</option>
							<option value="no">NO</option>
						</select>
						</div>
					</div>
				</div>
            </div>  
            <!-- /row-->
            
            <div class="row">
            <div class="col-md-6">
					<div class="form-group">
						<label>Image</label>
						<div class="styled-select">
						<input type="file" name="file">
						</div>
					</div>
				</div>
            </div>  
			<!-- /row-->
			
            <button name="submit" class="btn_1 medium">Save</button>
            <br>
            </form>
		</div>
		<!-- /box_general-->
			
		</div>
		<!-- /box_general-->
		
	  </div>
			
</div>
<!-- /container -->


@endsection