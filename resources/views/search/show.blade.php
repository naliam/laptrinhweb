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
							<h2><a href="/banh-{{$item->idbanh}}">{{$item->tenbanh}}</a></h2></br>
							<a href="/banh-{{$item->idbanh}}" class="view">{{$item->gia}}</a>
						</div>
						<a href="/banh-{{$item->idbanh}}"><img src="{{$item->hinhanh}}" alt="Image" style="float: right" /></a>
					</div>
				</li>
			@endforeach
	
			</ul>
		</div>
	</div>
@endsection