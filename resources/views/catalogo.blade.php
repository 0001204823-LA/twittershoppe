@extends('index')
@section('conteudo')

  <main class="page-hero">
    <div class="container page-panel">
      <div class="section-head">
        <div>
          <h2>Catalogo completo</h2>
          <p>Use filtros visuais para destacar categorias, colecoes e campanhas sazonais.</p>
        </div>
      </div>

      <div class="catalog-toolbar">
        <input type="text" placeholder="Buscar produto" />
        <select><option>Todas as categorias</option><option>Moda</option><option>Ticket</option><option>Acessorios</option></select>
        <select><option>Mais vendidos</option><option>Menor preco</option><option>Maior preco</option></select>
      </div>

      <div class="grid-4" style="margin-top:22px">
        <article class="card"><img src="assets/img/moletom.png" alt="moda"><div class="product-body"><span class="tag">Moda</span><h3>Moletom</h3><div class="price" data-price="399.9"></div><div class="meta"><span>Pronta entrega</span><a href="produto.html">Ver detalhes</a></div></div></article>
        <article class="card"><img src="assets/img/chapeu.png" alt="acessorio"><div class="product-body"><span class="tag">Acessorios</span><h3>Chapéu</h3><div class="price" data-price="59.9"></div><div class="meta"><span>Premium</span><a href="produto.html">Ver detalhes</a></div></div></article>
        <article class="card"><img src="assets/img/bandeira.png" alt="acessorio"><div class="product-body"><span class="tag">Acessorios</span><h3>Bandeira</h3><div class="price" data-price="59.99"></div><div class="meta"><span>Frete gratis</span><a href="produto.html">Ver detalhes</a></div></div></article>
        <article class="card"><img src="assets/img/camisa.png" alt="moda"><div class="product-body"><span class="tag">Moda</span><h3>Camisa</h3><div class="price" data-price="299.9"></div><div class="meta"><span>Novo</span><a href="produto.html">Ver detalhes</a></div></div></article>
        <article class="card"><img src="assets/img/ingresso.png" alt="ticket"><div class="product-body"><span class="tag">Ticket</span><h3>Ingresso</h3><div class="price" data-price="49.9"></div><div class="meta"><span>Novo</span><a href="produto.html">Ver detalhes</a></div></div></article>
    </div>
    </div>

@endsection