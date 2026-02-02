<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titre) ? $titre : "Portfolio"; ?> | Youssef Nasef</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="javascript" href="assets/js/script.js">
</head>
<body>

    <nav class="navbar">
        <div class="nav-content">
            <a href="index.php" class="logo">YN</a>
            <ul class="nav-links">
                <li><a href="index.php" class="<?= ($pageActuelle == 'accueil') ? 'active' : '' ?>">Accueil</a></li>
                <li><a href="ecole.php" class="<?= ($pageActuelle == 'ecole') ? 'active' : '' ?>">École</a></li>
                <li><a href="entreprise.php" class="<?= ($pageActuelle == 'entreprise') ? 'active' : '' ?>">Entreprise</a></li>
                <li><a href="projets.php" class="<?= ($pageActuelle == 'projets') ? 'active' : '' ?>">Projets</a></li>
                <li><a href="veille.php" class="<?= ($pageActuelle == 'veille') ? 'active' : '' ?>">Veille</a></li>
                <li><a href="contact.php" class="<?= ($pageActuelle == 'contact') ? 'active' : '' ?>" class="btn-contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>