@extends('master.main')

@section('content')

    @component('components.products.product-form-edit', ['product' => $product, 'projects' => $projects, 'categories' => $categories])
    @endcomponent

@endsection
