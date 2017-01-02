<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
	@section('title')
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  
</head>
<body>
 
<div id="header">
    <div>
        <div>
            <div id="logo">
                <a href="index.default"><img src="images/logo.gif" alt="Logo"/></a>
            </div>
            <div>
                <div>
					
				@if((Auth::user())==null)
                    <a href="/login">Đăng nhập </a>
					
					
				@else
					@if((Auth::user()->Level )==1)
						<a>Xin chào</a>
						<a>{{Auth::user()->name}}</a>
						<a href="/index">Quản lý Bánh</a>
					@else
						
						<a>{{Auth::user()->name}}</a>
						
						<a href="/dangxuat">Đăng xuất</a>
					@endif

				@endif
                </div>
                <form action="/Search" method="GET">
                    <input name = "tukhoa" type="text" id="search" maxlength="30" />
                    <input type="submit" value="" id="searchbtn" />
                </form>
            </div>
        </div>
		
        <ul>
            <li><a href="/">Home</a></li>
			@include('composer.LoaiBanhMenu')
			<li><a href="/">Khuyến mãi</a></li>
			<li><a href="/">Giỏ hàng</a></li>
        </ul>
		
        <div class="section">
			
            <a href="/"><img src="images/wedding-cupcakes-small.jpg" alt="Image"/></a>
        </div>
		
    </div>
</div>

@section('phanrieng')
@show


<div id="footer">
    <div class="section">
        <div>
            <div class="aside">
                <div>
                    <div>
                        <b>Too <span>BUSY</span> to shop?</b>
                        <a href="signin">Sign up for free</a>
                        <p>and we&#39;ll deliver it on your doorstep</p>
                    </div>
                </div>
            </div>
            <div class="connect">
                <span>Follow Us</span>
                <ul>
                    <li><a href="/about" target="_blank" class="about">About</a></li>
                    <li><a href="/services" target="_blank" class="services">Services</a></li>
                    <li><a href="/blog" class="blog">Subscribe</a></li>
                    <li><a href="/contact" target="_blank" class="contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

  
    <div id="navigation">
        <div>
            <ul>
                <li class="first"><a href="/">help</a></li>
                <li><a href="/">about cake delight</a></li>
                <li><a href="/">cake delight talk</a></li>
                <li><a href="/">developers</a></li>
                <li><a href="/">privacy policy</a></li>
                <li><a href="/">terms of use</a></li>
            </ul>
            <p>Copyright &copy; 2010-2015 cake delight  All rights reserved</p>
        </div>
    </div>
</div>
</body>
</html>