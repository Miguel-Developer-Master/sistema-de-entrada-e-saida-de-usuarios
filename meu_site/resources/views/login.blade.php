<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <meta name="description" content="Acesse sua conta para entrar na plataforma." />
    @vite(['resources/css/log-in.css', 'resources/js/log-in.js'])
</head>
<body>
  <header class="header">
    <h1 class="header__title">Entrar</h1>
  </header>

  <main class="main-content">
    <section class="login-section" aria-label="Formulário de login de usuário">
      <form id="loginForm" class="login-form">
        <fieldset class="form__fieldset">
          <legend class="form__legend">Acesse sua conta</legend>

          <div class="form__group">
            <label for="email" class="form__label">E-mail</label>
            <input type="email" id="email" class="form__input" placeholder="Digite seu e-mail" required />
          </div>

          <div class="form__group">
            <label for="password" class="form__label">Senha</label>
            <input type="password" id="password" class="form__input" placeholder="Digite sua senha" required />
          </div>

          <button type="submit" class="form__button">Entrar</button>

          <p class="form__link-text">
            Não tem uma conta?
            <a href="/cadastracao" class="form__link">Cadastre-se aqui</a>
        </fieldset>
      </form>
    </section>
  </main>

  <footer class="footer">
    <p class="footer__text">© 2025 — Todos os direitos reservados.</p>
  </footer>

</body>
</html>