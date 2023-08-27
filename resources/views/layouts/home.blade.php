@extends('layouts.masterLayout')
@section('content')
<h1>Home Page</h1>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi velit soluta totam, quo, sequi dicta neque recusandae, cumque iste voluptas facere. Libero animi officiis dignissimos dolorem! Est, quae? Facere, doloribus.
@endsection
@section("title")
Home-Page
@endsection

@push("script")
    <script src="/jquery.js"></script>
    <script src="/bootstrap.js"></script>
    <script src="/example.js"></script>
@endpush
@push("script")
    <script src="/test.js"></script>
    <script src="/react.js"></script>
    <script src="/vue.js"></script>
@endpush

{{-- @prepend("css")
    <style>
        *{
            background: red;
        }
    </style>
@endPrepend 
    
@endprepend--}}