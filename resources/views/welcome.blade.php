@extends('layouts.app')
@section('content')
    @include('components.home.overview')
    @include('components.home.guest')
    @include('components.home.promotions')
    @include('components.home.live_view')
    @include('components.home.moment_matter')
    @include('components.home.others')


@endsection
