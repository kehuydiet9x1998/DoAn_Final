@extends('backend.layout.index')
@section('content')
<div id="bantin" data-username="{{ auth()->user()->name }}" data-avatar="{{ asset(auth()->user()->anhdaidien) }}">
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
@endsection
