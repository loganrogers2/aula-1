<?php
$products = $products ?? [];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Barbearia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand fs-4 fw-bold" href="#">Barbearia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavShop" aria-controls="navbarNavShop" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavShop">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="/index">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="/shop">Vendas</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container py-4">
    <h1 class="mb-4">Área de Vendas</h1>

    <div class="row row-cols-1 row-cols-md-3 g-3">
      <?php foreach ($products as $p): ?>
        <div class="col">
          <div class="card h-100">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?= htmlspecialchars($p['name']) ?></h5>
              <p class="card-text mb-4">Preço: R$ <?= htmlspecialchars($p['price']) ?></p>
              <div class="mt-auto">
                <a href="#" class="btn btn-success">Comprar</a>
                <a href="#" class="btn btn-outline-secondary ms-2">Detalhes</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
