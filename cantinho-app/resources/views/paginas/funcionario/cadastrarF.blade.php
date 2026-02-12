<x-layout titulo="">
    <form action="/cadastrarLogin" method="GET">
        <link rel="stylesheet" href="css/cadastroF.css">
        @csrf 
        <div class="top-bar"></div>
        <div class="texto">
            <h2 class="titulo">Não Tem Cadastro?</h2>
            <p class="subtitulo">Sente, tome um café e agilize agora o seu cadastro</p>
        </div>

        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="mb3">
                        <label class="campo">Email: </label>
                        <input type="email" name="email" class="form-control" placeholder="Informe o seu Email..." id="email">
                    </div>
                </div>
                <br><br>

                <div class="row">
                    <div class="mb3">
                        <label class="campo">Nome do Usuário: </label>
                        <input type="text" name="nomeUsuario" class="form-control" placeholder="Crie o nome de usuário..." id="nomeUsuario">
                    </div>
                </div>
                <br><br>

                <div class="row">
                    <div class="mb3">
                        <label class="campo">Senha: </label>
                        <input type="password" name="senha" class="form-control" placeholder="Crie a sua senha..." id="senha">
                        @error('senha')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <br><br>
                
                <div class="row">
                    <div class="mb3">
                        <label class="campo">Confirmar Senha: </label>
                        <input type="password" name="senhaConfirmada" class="form-control" placeholder="Confirme a senha criada..." id="senhaConfirmada">
                    </div>
                </div>

                <div class="row">
                    <button type="submit" class="botao">Confirmar</button>
                    <a class="botao" href="/">Voltar</a>
                </div>
            </div>
        </div>     
    </form>
</x-layout>