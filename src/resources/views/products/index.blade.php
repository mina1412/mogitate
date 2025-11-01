<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <h1>商品一覧</h1>
  </header>

  <main class="container">
      <aside class="sidebar">
          <form action="{{ url('products') }}" method="GET" class="search-form">
            <input type="text" name="keyword" placeholder="商品名で検索" value="{{ $keyword }}">
            <button type="submit">検索</button>

            <label for="sort">価格順で表示</label>
            <select name="sort" id="sort">
                <option value="">価格で並べ替え</option>
                <option value="asc" {{ $sort === 'asc' ? 'selected' : '' }}>低い順に表示</option>
                <option value="desc" {{ $sort === 'desc' ? 'selected' : '' }}>高い順に表示</option>
            </select>

            <button type="submit" class="search-btn">検索</button>
          </form>
      </aside>

      <section class="main-content">
          <div class="top-actions">
               <a href="#" class="add-btn">＋商品を追加</a>
          </div>
        
        @if(!empty($sort))
            <div class="sort-tag">
                @if($sort === 'asc')
                    <span>低い順</span>
                @elseif($sort === 'desc')
                    <span>高い順</span>
                @endif
                <a href="{{ url('products') }}" class="reset-btn">×</a>
            </div>
        @endif
    
        @if(!empty($keyword))
            <h2>"{{ $keyword }}"の商品一覧</h2>
        @endif

          <div class="products">
        @foreach ($products as $product)
           <div class="product">
                <a href="{{ route('products.show', $product->id) }}">
                     <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                     <p class="name">{{ $product->name }}</p>
                     <p class="price">¥{{ number_format($product->price) }}</p>
                </a>
          </div>
        @endforeach

        <div class="pagination">
        {{ $products->links() }}
          </div>
      </section>
  </main>
</body>
</html>
