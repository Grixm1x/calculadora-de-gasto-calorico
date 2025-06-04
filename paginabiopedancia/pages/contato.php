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
            <input type="number" id="number" name="Telefone" placeholder="Telefone:"><br>
            <input type="number" id="number" name="Idade" placeholder="Idade:"><br>
            <input type="checkbox" value="Duvida" id="Duvida" nome="pergunta1">
            <label for="Duvida">Duvida</label>
            <input type="checkbox" value="Sugestão" id="Sugestão" nome="pergunta2">
            <label for="Sugestão">Sugestão</label>
            <input type="checkbox" value="Experiencia" id="Experiencia" nome="pergunta3">
            <label for="Experiencia">Experiencia</label>
            <input type="checkbox" value="Relatarumerronosite" id="Relatar um erro no site" nome="pergunta4">
            <label for="Relatarumerronosite">Relatar um erro no site</label>
            <input type="checkbox" value="reclamação" id="Reclamação" nome="pergunta5">
            <label for="reclamação">Reclamação</label>
            <textarea placeholder="Comentarios:" name="Comentarios" id="Comentarios" rows="10" cols="60"></textarea><br>
            <button onclick="alert('Enviado')">Enviar</button><br>
        </fieldset>
        <section><br>
</body>

</html>