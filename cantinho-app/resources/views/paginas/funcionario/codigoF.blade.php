<x-layout titulo="">
    <form action="" method="GET">
    <link rel="stylesheet" href="css/codigoF.css">
        @csrf 

        <div class="top-bar"></div>
        <div class="texto">
            <h2 class="titulo">Acabamos de enviar um código para o seu e-mail</h2>
            <p class="subtitulo">Insira no campo abaixo o código de 5 dígitos enviado para o seu e-mail</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="codigos">
                    <input type="text" name="codigo[]" maxlength="1" class="codigo">
                    <input type="text" name="codigo[]" maxlength="1" class="codigo">
                    <input type="text" name="codigo[]" maxlength="1" class="codigo">
                    <input type="text" name="codigo[]" maxlength="1" class="codigo">
                    <input type="text" name="codigo[]" maxlength="1" class="codigo">
                </div>
            </div>
        </div>
        <button class="botao" type="submit">Enviar</button>
    <script>
        const inputs = document.querySelectorAll('.codigo');

        inputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === "Backspace" && input.value === "" && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
    </script>
    </form>
</x-layout>