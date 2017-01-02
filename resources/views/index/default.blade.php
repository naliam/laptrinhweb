


@extends('layouts.master')
@section('title', 'Product')
@section('phanrieng')

	<div id="content">
		<div>
			
			<h1>Các bánh của tiệm</h1>
			<ul>
				@include ('composer.DSBanhTrangChu')
			</ul>
			
			<div class="section">
					
						<h2>Đôi nét về tiệm bánh</h2>
						<div style="width:900px; margin:auto">
						<p>Khởi đầu tự một tiệm bánh nhỏ, với những sản phẩm chất lượng ngon miệng từ bánh mì, bánh ngọt, bánh kem, đến các sản phẩm khác, tiệm bánh của chúng tôi luôn đa dạng mặt hàng với giá thành phù hợp.</br>
							Giữ vững truyền thống chất lượng sản phẩm, bên cạnh đó không ngừng cải tiến phương pháp và áp dụng những kỹ thuật tiên tiến,tiệm bánh luôn mong muốn phát triển để đáp ứng nhiều hơn nữa nhu cầu ngày càng cao của người tiêu dùng.
						</p>
						
					</div>				
				</div>
		</div>
	</div>
	
	
	
@endsection