<!DOCTYPE html>
<html>
<head>
  <title>Kontakt stranica</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: "Montserrat", sans-serif;
    }

    header.topbar {
      position: fixed;
      top: 0;
      left: 0;
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

    .topbar .left-links {
      display: flex;
      gap: 24px;
      margin-left: 200px;
    }

    .topbar .right-links {
      display: flex;
      gap: 24px;
      margin-right: 200px;
    }

    .topbar a {
      color: #1b1b18;
      text-decoration: none;
      font-size: 16px;
    }

    .topbar a:hover {
      text-decoration: underline;
    }

    main.content {
      margin-top: 90px;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
      padding: 20px;
    }

    h1 {
      margin-bottom: 20px;
    }

    .contact-info p {
      font-size: 18px;
      margin: 8px 0;
    }

    .map-container {
      margin-top: 30px;
      height: 400px;
      width: 100%;
      border: 1px solid #ccc;
    }

    footer {
      margin-top: 40px;
      text-align: center;
      padding: 16px;
      background-color: #f1f1f1;
      font-size: 14px;
      color: #444;
    }
  </style>
</head>
<body>

<header class="topbar">
  <div class="left-links">
    <a href="{{ auth()->check() ? '/dashboard' : '/' }}">Početna stranica</a>
    <a href="/katalog">Katalog</a>
    <a href="/kontakt">Kontakt</a>
  </div>

  <div class="right-links">
    @if (Route::has('login'))
        @auth

        @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    @endif
  </div>
</header>

<main class="content">
  <h1 style="margin-top: 50px;">Kontakt</h1>
  <div class="contact-info">
    <p><strong>Email:</strong> info@sokolici.com</p>
    <p><strong>Adresa:</strong> Sokolići, Gornji Milanovac</p>
    <p><strong>Telefon:</strong> +382 12 345 678</p>
  </div>

  <div class="map-container">
    <iframe
      width="100%" height="100%" frameborder="0" style="border:0"
      src="https://www.google.com/maps?q=Sokolići,Montenegro&output=embed"
      allowfullscreen
      aria-hidden="false"
      tabindex="0">
    </iframe>
  </div>
</main>

<footer>
  © 2025 Andrej Dostanić
</footer>

</body>
</html>
