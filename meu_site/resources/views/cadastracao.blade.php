<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastramento</title>
    <meta name="description" content="Crie sua conta para acessar a plataforma." />
    @vite(['resources/css/cadastracaoo.css', 'resources/js/cadastracaoo.js'])  
</head>
<body>
  <header class="header">
    <h1 class="header__title">Cadastrar</h1>
  </header>
  <main class="main-content">
    <section class="register-section" aria-label="Formulário de cadastro de usuário">
      <form id="registerForm" class="register-form">
        <fieldset class="form__fieldset">
          <legend class="form__legend">Crie sua conta</legend>

          <div class="form__group">
            <label for="name" class="form__label">Nome completo</label>
            <input type="text" id="name" class="form__input" placeholder="Digite seu nome" required />
          </div>

          <div class="form__group">
            <label for="email" class="form__label">E-mail</label>
            <input type="email" id="email" class="form__input" placeholder="Digite seu e-mail" required />
          </div>

          <div class="form__group">
            <label for="password" class="form__label">Senha</label>
            <input type="password" id="password" class="form__input" placeholder="Crie uma senha" required />
          </div>

          <div class="form__group">
            <label for="confirmPassword" class="form__label">Confirmar senha</label>
            <input type="password" id="confirmPassword" class="form__input" placeholder="Repita a senha" required />
          </div>

          <button type="submit" class="form__button">Cadastrar</button>
          <p class="form__message" id="message"></p>

          <p class="form__link-text">
            Não tem uma conta?
            <a href="/login" class="form__link">Faça seu login aqui</a>
        </fieldset>
      </form>
    </section>
  </main>

  <footer class="footer">
    <p class="footer__text">© 2025 — Todos os direitos reservados.</p>
  </footer>
</body>
</html>