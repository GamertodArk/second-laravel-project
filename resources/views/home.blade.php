@extends('layouts.app')

@section('content')
	<h1>Hello World</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam eum sapiente, error. Laborum ad perferendis, suscipit nobis ab rem, repellat, consequatur aliquid nisi architecto impedit. Voluptas officia et ad perspiciatis.</p>
@endsection

@section('sidebar')
	@parent

	<p>This is appended to the sidebar</p>
@endsection