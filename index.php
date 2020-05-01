<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
</head>
<body>

    <input id="email"/>
    <button onclick="validar()">Validar</button>
    <script>
        /**
            Função testa o valor inserido no input #email 
            contra uma expressão regular
            e retorna se é válido ou não.
         */
        function validar() {
            let regex = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@((gmail)|(outlook)|(hotmail))\.com(\.br)?/
            let mail = document.getElementById("email").value
            if (regex.test(mail)) {
                alert("É valido")
            }else {
                alert("Não é valido")
            }
        }
    </script>
</body>
</html>