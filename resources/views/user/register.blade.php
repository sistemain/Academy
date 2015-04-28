@extends('base.index')

@section('content')
	<div class="container">
		<form action="/register" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label for="">{{Lang::get("data.name")}}</label>
			<input type="text" name="name" id="">
			<label for="">{{Lang::get("data.lastname")}}</label>
			<input type="text" name="lastname" id="">
			<label for="">{{Lang::get("data.email")}}</label>
			<input type="email" name="email" id="">
			<label for="">{{Lang::get("data.username")}}</label>
			<input type="text" name="username" id="">
			<label for="">{{Lang::get("data.password")}}</label>
			<input type="password" name="password" id="">
			<label for="">{{Lang::get("data.repeat_password")}}</label>
			<input type="password" name="password_confirmation" id=""> 
			<br><br>
			<input type="submit" value="{{Lang::get("data.submit")}}">
		</form>
		
	</div>


@stop