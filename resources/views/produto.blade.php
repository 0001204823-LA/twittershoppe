@extends('index')
@section('conteudo')

  <main class="page-hero">
    <div class="container page-panel product-grid">
      <div class="card"><img src="assets/img/moletom.png" alt="moletom"></div>
      <div>
        <span class="tag">Moda urbana</span>
        <h1>Moletom 2026 - CEC(Cruzeiro Esporte Clube)</h1>
        <p>Modelo versatil com pegada premium, visual limpo e proposta ideal para vitrine principal de um ecommerce de moda.</p>
        <div class="price" data-price="400.9" data-unit-price="400.9"></div>
        <p class="small">Parcelamento em ate 12x sem juros. Frete gratis para capitais.</p>

        <div class="list">
          <label>Cor<select><option>Branco</option><option>Azul</option><option>Branco e Azul</option></select></label>
          <label>Tamanho<select><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option></select></label>
          <label>Quantidade<input id="qty" type="number" min="1" value="1" /></label>
        </div>

        <div class="cta-row">
          <a class="btn btn-primary" href="route('Carrinho')">Adicionar ao carrinho</a>
          <a class="btn btn-light" href="route('Checkout')">Comprar agora</a>
        </div>

        <div class="summary" style="margin-top:22px;position:static">
          <div class="summary-row"><strong>Total estimado</strong><strong data-product-total></strong></div>
          <div class="summary-row"><span>Disponibilidade</span><span class="badge">Em estoque</span></div>
          <div class="summary-row"><span>SKU</span><span>NS-URBAN-001</span></div>
        </div>
      </div>
    </div>

@endsection   