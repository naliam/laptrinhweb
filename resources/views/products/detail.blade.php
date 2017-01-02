@extends('layouts.master')
@section('title', 'Product')
@section('phanrieng')

	<div id="content">
		<div>
			<h1>Các bánh của tiệm</h1>
			<ul>
			@foreach($items as $item)
				<li>
					<div>
						<div>
							<h2>{{$item->tenbanh}}</h2></br>
							<p>Mô tả: {{$item->mota}}</p>
							<a href="#" class="view">{{$item->gia}}</a>
						</div>
						<a href="#"><img src="{{$item->hinhanh}}" alt="Image" style="float: right" /></a>
					</div>
				</li>
			@endforeach
	
			</ul>
		</div>
	</div>
@endsection