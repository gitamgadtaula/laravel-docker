@extends('layout.front')

@section('content')
<style>
    .filled-button {
	background-color: #ffbd03;
	color: #372800;
	font-size: 14px;
	text-transform: capitalize;
	font-weight: 300;
	padding: 10px 20px;
	border-radius: 5px;
	display: inline-block;
	transition: all 0.3s;
    width: -webkit-fill-available;
}

.filled-button:hover {
	background-color: #121212;
	color: #fff;
}
</style>
<div class="row d-flex justify-content-center" style="margin: 5rem 0;">
    <div class="col-8">
                <h2 style="text-align:center; margin-bottom:20px;">Admin Login</h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="alert-ul">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="bg-light p-4" method="POST" action="{{route('loginpost')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email" style="font-weight:bold;">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="password" style="font-weight:bold;">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div>
                        <a href="">
                        <button type="submit" class="filled-button btn">Login</button>
                        </a>
                    </div>

                </form>
            </div>
        </div>


@endsection