<!DOCTYPE html>
<html>
<head>
  <title>Početna stranica</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <style>
    html,
    body {
      height: 100%;
      margin: 0;
      font-family: "Montserrat", sans-serif;
    }

    .layout {
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: 250px;
      background-color: #f8fafc;
      height: 100vh;
      padding-top: 16px;
      padding-left: 24px;
      padding-right: 24px;
      box-sizing: border-box;
      border-right: 1px solid #e2e8f0;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .sidebar h3.logo {
      font-weight: 700;
      font-size: 1.5rem;
      color: #1e293b;
      margin: 0;
      padding: 0;
      line-height: 50px;
      width: 100%;
      border-bottom: 1px solid #e2e8f0;
      padding-left: 0;
      padding-right: 0;
    }

    .sidebar a.sidebar-link {
      color: #475569;
      font-weight: 700;
      margin-top: 50px;
      margin-bottom: 16px;
      text-decoration: none;
      font-size: 1.3rem;
      transition: color 0.3s ease;
      width: 100%;
      padding-left: 0;
    }

    .sidebar a.sidebar-link:hover {
      text-decoration: underline;
      color: #2563eb;
    }

    .sidebar a.category-link {
      display: block;
      color: #3b82f6;
      font-weight: 600;
      margin-bottom: 14px;
      text-decoration: none;
      font-size: 1rem;
      transition: color 0.3s ease;
      width: 100%;
      padding-left: 0;
    }

    .sidebar a.category-link:hover {
      text-decoration: underline;
      color: #2563eb;
    }

    .sidebar .categories-title {
      color: #475569;
      font-weight: 600;
      font-size: 1.5rem;
      margin-top: 0;
      margin-bottom: 16px;
      width: 100%;
    }

    .main-content {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .content {
      flex: 1;
      padding: 32px 48px;
      margin-top: 80px;
      max-width: calc(100% - 48px);
      box-sizing: border-box;
    }

    .topbar {
      position: fixed;
      top: 0;
      left: 250px;
      right: 0;
      height: 70px;
      background-color: white;
      z-index: 10;
      border-bottom: 1px solid #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 48px;
      font-family: "Montserrat", sans-serif;
      font-weight: 600;
    }

    .topbar a {
      color: #1b1b18;
      text-decoration: none;
      margin-right: 24px;
      font-size: 16px;
    }

    .topbar a:last-child {
      margin-right: 0;
    }

    .topbar a:hover {
      text-decoration: underline;
    }

    footer {
      background-color: #f1f1f1;
      text-align: center;
      padding: 16px;
      font-family: "Montserrat", sans-serif;
      font-weight: 600;
      color: #475569;
      margin-top: 24px;
    }

    .cards-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      margin-top: 24px;
      margin-right: 48px;
    }

    .card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
      padding: 16px;
      font-family: "Montserrat", sans-serif;
      transition: transform 0.2s ease;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 450px;
      overflow: hidden;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 16px rgb(0 0 0 / 0.15);
    }

    .card img {
      max-height: 300px;
      width: 100%;
      object-fit: cover;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    .card h3 {
      margin: 0;
      margin-bottom: 8px;
      font-weight: 700;
      font-size: 1.2rem;
      color: #1e293b;
      text-align: center;
    }

    .card p {
      margin: 0;
      font-weight: 600;
      color: #475569;
      text-align: center;
    }

    .card .price {
      margin-top: auto;
      font-weight: 700;
      color: #3b82f6;
    }
  </style>
</head>
<body>
  <div class="layout">
    <!-- Sidebar -->
    <nav class="sidebar">
      <div style="display: flex; align-items: center; gap: 50px; margin-bottom: 20px;">
        <h3 class="logo" style="margin: 0;">LOGO</h3>
        <a href="{{ url('/') }}">
          <img src="{{ asset('storage/images/logo1.png') }}" alt="Logo" style="width: 30px; height: auto;">
        </a>
      </div>



      <a href="{{ url('/') }}" class="sidebar-link">Svi proizvodi</a>

      <h4 class="categories-title">Kategorije</h4>
      <a href="{{ url('/?kategorija=Alkoholna pića') }}" class="category-link">Alkoholna pića</a>
      <a href="{{ url('/?kategorija=Džemovi') }}" class="category-link">Džemovi</a>
      <a href="{{ url('/?kategorija=Sokovi') }}" class="category-link">Sokovi</a>
    </nav>

    <!-- Glavni sadržaj + header + footer -->
    <div class="main-content">
      <!-- Gornji header -->
      <header class="topbar">
        <div>
          <a href="/" class="active">Početna stranica</a>
          <a href="/katalog">Katalog</a>
          <a href="/kontakt">Kontakt</a>
        </div>

        <div>
          @if (Route::has("login"))
            @auth
              <a href="{{ url('/dashboard') }}">Prodavnica</a>
            @else
              <a href="{{ route('login') }}">Login</a>
              @if (Route::has("register"))
                <a href="{{ route('register') }}">Register</a>
              @endif
            @endauth
          @endif
        </div>
      </header>

      <!-- Glavni sadržaj -->
      <div class="content w3-main">
        <h2>Početna stranica</h2>

        @if($products->isEmpty())
          <p>Trenutno nema dostupnih proizvoda.</p>
        @else
          <div class="cards-container">
            @foreach ($products as $product)
              <a href="{{ route('proizvodi.show', $product->id) }}" style="text-decoration: none;">
                <div class="card">
                  <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                  <h3>{{ $product->name }}</h3>
                  <p>{{ $product->category->name }}</p>
                  <p class="price">Cena: {{ $product->price }} RSD</p>
                </div>
              </a>
            @endforeach
          </div>
        @endif
      </div>

      <!-- Futer -->
      <footer id="footer">Andrej Dostanic</footer>
    </div>
  </div>
</body>
</html>
