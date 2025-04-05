
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Votre Titre</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/carRental/assets/css/index.css">
  <link rel="stylesheet" href="/carRental/assets/css/header.css">
</head>
<body>

<header>
  <nav class="navv">
    <a href="/carRental/index.php" class="nom" title="CarRent">CarRent</a>
    
    <div class="search-container">
      <form id="searchForm" class="search-form">
        <div class="search-field">
          <input type="text" placeholder="Rechercher véhicules..." name="query" required>
          <button type="submit" title="Rechercher">
            <span>🔍</span>
          </button>
        </div>
        
        <select name="sort" class="sort-select">
          <option value="default">Trier par</option>
          <option value="price_asc">Prix (bas → haut)</option>
          <option value="price_asc">Prix (bas → haut)</option>
          <option value="price_desc">Prix (haut → bas)</option>
          <option value="voiture">Voitures seulement</option>
          <option value="velo">Vélos seulement</option>
        </select>
      </form>
    </div>
  
    <button class="menu-toggle" aria-label="Toggle menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <ul class="nav-links">
      <li><a href="/carRental/index.php"  title="Accueil" >Accueil</a></li>
      <li><a href="/carRental/views/contact.php" title="Contact">Contact</a></li>
      <li><a href="#page-bottom" title="À propos" >À propos</a></li>
      <?php /*
      <li><a class="connexion" href="#" data-bs-toggle="modal" data-bs-target="#loginModal" title="Connexion">Connexion</a></li>
      */?>
      <li><a class="connexion" href="/carRental/views/auth/auth.php" title="Connexion">Connexion</a></li>
    </ul>
  </nav>
</header>