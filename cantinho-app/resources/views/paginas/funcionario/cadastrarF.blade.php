<x-layout titulo="">
    <form action="cadastrarF/salvarF" method="GET">
    <link rel="stylesheet" href="css/cadastroF.css">
        @csrf 

        <div class="top-bar"></div>

        <div class="container">
            <div class="row">
                <label class="campo1" name="email">Email: </label> 
                <input class="campo" type="text" name="email" placeholder="Digite seu Email...">
                <br><br>

                <label class="campo1" name="nomeUsuario">Nome Usuário: </label>
                <input class="campo" type="text" name="nomeUsuario" placeholder="Crie um nome de usuário...">
                <br><br>

                <label class="campo1" name="senha">Senha: </label>
                <input class="campo" type="password" name="senha" placeholder="Crie uma senha...">
                <br><br>

                <label class="campo1" name="senhaConfirmada">Confirme a sua senha: </label>
                <input class="campo" type="password" name="senhaConfirmada" placeholder="Confirme a sua senha...">
                <br><br>
            
                <button class="botao">Confirmar</button>

                <a class="botao" href="/index"><button>Voltar</button></a>
            </div>
        </div>

    </form>

</x-layout>