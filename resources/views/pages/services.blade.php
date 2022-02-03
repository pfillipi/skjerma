@extends('layouts.app')

@section('content')
  <h1>{{$title ?? ''}}</h1>
  @if(count($services) > 0)
    @foreach($services as $service)

    @endforeach
  @endif
@endsection