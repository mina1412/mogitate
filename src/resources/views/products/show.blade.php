@extends('layouts.app')

@section('content')
<div class="product-detail-container">
     <h2>{{ $product->name }}</h2>

     <div class="product-detail">
         <img src="{{ asset('image/' . $product->image_path) }}" alt="{{ $product->name }}" class="detail-image">

         <div class="product-info">
              <p><strong>値段:</strong> {{ $product->price }}</p>
              <p><strong>季節:</strong>{{ $product->season }}</p>
              <p><strong>説明:</strong>{{ $product->description }}</p>

              <div class="buttons">
                   <a href="{{ route('products.edit', $product->id) }}" class="btn-edit">変更を保存</a>
                   <a href="{{ route('products.index') }}" class="btn-back">戻る</a>
@endsection
