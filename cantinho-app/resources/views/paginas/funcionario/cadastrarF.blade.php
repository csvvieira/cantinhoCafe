<x-layout titulo="">
    <form action="cadastrarF/salvarF" method="GET">
    <link rel="stylesheet" href="css/cadastroF.css">
        @csrf 

        <div class="top-bar"></div>
        <div class="texto">
            <h2 class="titulo">Não Tem Cadastro?</h2>
            <p class="subtitulo">Sente, tome um café e agilize agora o seu cadastro</p>
        </div>

        <div class="container">
            <div class="row">
              
                <label class="campo1" name="email">Email: </label> 
                <input class="campo" type="email" name="email" placeholder="Digite seu Email...">
                <br><br>

                <label class="campo1" name="nomeUsuario">Nome Usuário: </label>
                <input class="campo" type="text" name="nomeUsuario" placeholder="Crie um nome de usuário...">
                <br><br>

                <label class="campo1">Senha: </label>
                <input class="campo" type="password" name="senha" placeholder="Crie uma senha...">
                <br><br>

                <label class="campo1">Confirme a sua senha: </label>
                <input class="campo" type="password" name="senhaConfirmada" placeholder="Confirme a sua senha...">
                <br><br>

                <button type="submit" class="botao">Confirmar</button>
                <a class="botao" href="/">Voltar</a>
            </div>
        </div>

    </form>

</x-layout>