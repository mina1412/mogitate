@extends('layouts.app')

@section('content')
<main>
    <section class="edit">
        <h2>{{ $product->name }}</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="image-area">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
            <input type="file" name="image">
            @error('image')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>商品名</label><br>
            <input type="text" name="name" value="{{ old('name', $product->name) }}">
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>値段</label><br>
            <input type="number" name="price" value="{{ old('price', $product->price) }}">
            @error('price')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>季節</label><br>
            @foreach(['春','夏','秋','冬'] as $season)
                <label>
                    <input type="radio" name="season" value="{{ $season }}" {{ old('season', $product->season) == $season ? 'checked' : '' }}>
                    {{ $season }}
                </label>
            @endforeach
            @error('season')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>商品説明</label><br>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="btn-area">
            <button type="submit" class="save-btn">変更を保存</button>
            <a href="{{ route('products.index') }}" class="back-btn">戻る</a> 
    </form>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;"> 
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn">ゴミ箱</button>
            </form>
        </div>
</main>
@endsection
