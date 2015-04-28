<header>
	{{-- @include("base.navbar") --}}
	@if (Auth::guest())
		<img id="logo" src="{{Config::get("base.logo")}}">
		<span id="title">{{Config::get("base.title")}}</span>
	
		<div class="links">
			<a href="/login">
				<i class="fa fa-home"></i>
				{{Lang::get("data.login")}}
			</a>
			<a href="/register">
				<i class="fa fa-user"></i> 
				{{Lang::get("data.register")}}
			</a>
			<a href="/help">
				<i class="fa fa-question-circle"></i>
				{{Lang::get("data.help")}}
			</a>
			
		</div>
	@endif

</header>