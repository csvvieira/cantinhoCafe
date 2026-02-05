<x-layout titulo="Sistema de Vendas">

    <link rel="stylesheet" href="css/login.css">

    <div class="top-bar"></div>

    <div class="container">
        <div class="login-box">

            <!--Imagem do carrinho-->
            <img src="https://cdn-icons-png.flaticon.com/512/263/263142.png" alt="Carrinho">

            <form method="POST" action="">
                @csrf

                <div class="input-group">
                    <input type="text" name="nomeUsuario" placeholder="Usuário" required>
                </div>

                <div class="input-group">
                    <input type="password" name="senha" placeholder="Insira sua senha">
                </div>

                <button type="submit" class="btn-login">
                    Entrar
                </button>
            </form>

            <div class="links">
                <a href="/cadastrarF">Cadastro</a>
                <a href="/recuperarF">Esqueci minha senha</a>
            </div>

        </div>
    </div>

</x-layout>