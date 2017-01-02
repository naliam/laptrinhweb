@foreach($items as $item)
	@if($loop->index == 4)
		@break
	@endif
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