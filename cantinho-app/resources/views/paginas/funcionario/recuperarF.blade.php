<x-layout titulo="">
    <form action="" method="GET">
    <link rel="stylesheet" href="css/recuperaF.css">
        @csrf

        <div class="top-bar"></div>
        <div class="texto">
            <h2 class="titulo">Esqueceu sua</h2>
            <h2 class="titulo">senha?</h2>
            <p class="subtitulo">Redefina sua senha em duas etapas</p>
        </div>

        <div class="container">
            <div class="row">
                <label class="campo1" name="email">Email: </label> 
                <input class="campo" type="email" name="email" placeholder="Digite seu Email para rececer o código...">
                <br><br>

                <button class="botao" type="submit" href="/codigoF" >Confirmar</button>
                <a class="botao" href="/">Voltar</a>
            </div>
        </div>
    </form>
</x-layout>