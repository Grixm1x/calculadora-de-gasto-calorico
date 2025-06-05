<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/hoome.css">
    <title>Contato</title>
</head>

<body>
    <h1><strong>Fale Conosco</strong></h1>
    <p>Tem alguma dúvida, sugestão ou quer compartilhar sua experiência com alguma de nossas dietas Adoramos ouvir você!
        Entre em contato conosco através do formulário abaixo.
    </p><br>
    <section>
        <form action="Formulario:"></form>
        <fieldset>
            <legend><strong>Informações de contato</strong></legend>
            <input type="text" id="name" name="Nome" placeholder="Nome:"><br>
            <input type="email" id="email" name="Email" placeholder="Email:"><br>
            <input type="number" id="phone" name="Telefone" placeholder="Telefone:"><br>
            <input type="number" id="age" name="Idade" placeholder="Idade:"><br>

            <input type="checkbox" value="Duvida" id="Duvida" name="pergunta1">
            <label for="Duvida">Duvida</label>
            <input type="checkbox" value="Sugestão" id="Sugestao" name="pergunta2">
            <label for="Sugestao">Sugestão</label>
            <input type="checkbox" value="Experiencia" id="Experiencia" name="pergunta3">
            <label for="Experiencia">Experiencia</label>
            <input type="checkbox" value="Relatarumerronosite" id="Relatarumerronosite" name="pergunta4">
            <label for="Relatarumerronosite">Relatar um erro no site</label>
            <input type="checkbox" value="reclamacao" id="Reclamacao" name="pergunta5">
            <label for="Reclamacao">Reclamação</label><br>

            <textarea placeholder="Comentarios:" name="Comentarios" id="Comentarios" rows="10"
                cols="60"></textarea><br><br>

            <button id="sendButton">Enviar</button><br>
        </fieldset>
        <section><br>
            <script src="contato.js"></script>
</body>

</html>
