<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Connexion | </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background-image: url('/assets/imageee.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .form-wrapper {
      position: absolute;
      top: 50%;
      right: 5%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.08);
      padding: 40px;
      border-radius: 16px;
      max-width: 400px;
      width: 100%;
      backdrop-filter: blur(12px);
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
      color: #ffffff;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.15);
      color: white;
      box-shadow: none;
      border-color: #ff9800;
    }

    .form-control::placeholder {
      color: #ddd;
    }

    .btn-orange {
      background-color: #ff9800;
      border: none;
    }

    .btn-orange:hover {
      background-color: #ffa726;
    }

    .toggle-link {
      color: #ffcc80;
      cursor: pointer;
      text-decoration: underline;
    }

    .hidden {
      display: none; 
    }
  </style>
</head>
<body>

<div class="form-wrapper" id="login-form">
  <h2 class="text-center mb-3">Bienvenue!</h2>
  <p class="text-center text-light">Connexion Serveur </p>
  <form action="/login" method="POST">
    <div class="mb-3">
      <label>Nom d'utilisateur</label>
      <input type="text" class="form-control" name="username" placeholder="ex: mohamed.serveur" required>
    </div>
    <div class="mb-3">
      <label>Mot de passe</label>
      <input type="password" class="form-control" name="password" placeholder="********" required>
    </div>
    <div class="d-grid">
      <button type="submit" class="btn btn-orange">Se connecter</button>
    </div>
    <p class="mt-3 text-center">Pas encore de compte ? <span class="toggle-link" onclick="showSignup()">Créer un compte</span></p>
  </form>
</div>

<div class="form-wrapper hidden" id="signup-form">
  <h2 class="text-center mb-3">Créer un compte</h2>
  <p class="text-center text-light">Serveur </p>
  <form action="/register" method="POST">
    <div class="mb-3">
      <label>Nom complet</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
      <label>Nom d'utilisateur</label>
      <input type="text" class="form-control" name="username" required>
    </div>
    <div class="mb-3">
      <label>Mot de passe</label>
      <input type="password" class="form-control" name="password" required>
    </div>
    <div class="mb-3">
      <label>Confirmation</label>
      <input type="password" class="form-control" name="password_confirmation" required>
    </div>
    <div class="d-grid">
      <button type="submit" class="btn btn-orange">Créer le compte</button>
    </div>
    <p class="mt-3 text-center">Déjà un compte ? <span class="toggle-link" onclick="showLogin()">Se connecter</span></p>
  </form>
</div>

<script>
  function showSignup() {
    document.getElementById('login-form').classList.add('hidden');
    document.getElementById('signup-form').classList.remove('hidden');
  }

  function showLogin() {
    document.getElementById('signup-form').classList.add('hidden');
    document.getElementById('login-form').classList.remove('hidden');
  }
</script>

</body>
</html>
