<x-layout titulo="Cadastrar Funcionário">

    <link rel="stylesheet" href="css/cadastroF.css">

    <div class="top-bar"></div>

    <div class="container">
        <form class="cadastro-card" action="cadastrarF/salvarF" method="POST">
            @csrf

            <div class="cadastro-titulo">Não tem cadastro?</div>
            <div class="cadastro-subtitulo">
                Sente, tome um café e agilize agora o seu cadastro
            </div>

            <div class="cadastro-conteudo">

                <div class="campo">
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="Digite seu e-mail">
                </div>

                <div class="campo">
                    <label>Nome de Usuário</label>
                    <input type="text" name="nomeUsuario" placeholder="Crie um nome de usuário">
                </div>

                <div class="campo">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Crie uma senha">
                </div>

                <div class="campo">
                    <label>Confirme a nova senha</label>
                    <input type="password" name="senhaConfirmada" placeholder="Confirme sua senha">
                </div>

                <button type="submit" class="botao-confirmar">
                    Confirmar
                </button>

            </div>
        </form>
    </div>
</x-layout>