@extends('layout/main')
@section('title', $title)
@section('main-content')
    @include('layout/about')
    @include('layout/service')
    @include('layout/portofolio')
    @include('layout/testimonial')
    @include('layout/contact')
@stop