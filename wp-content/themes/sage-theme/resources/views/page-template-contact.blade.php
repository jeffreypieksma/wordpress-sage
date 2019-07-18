{{--
  Template Name: Page Contact Template
--}}

@extends('layouts.app')

@section('content')
  {{$test}}
  @while(have_posts()) @php the_post() @endphp
    <h1>Dit is een mooie contact pagina</h1>
    


  @endwhile
@endsection
