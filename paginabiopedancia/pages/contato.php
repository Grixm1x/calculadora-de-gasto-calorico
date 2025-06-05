<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/hoome.css">
    <title>Contato</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
</head>

<body>
    <h1><strong>Fale Conosco</strong></h1>
    <p>Tem alguma dúvida, sugestão ou quer compartilhar sua experiência com alguma de nossas dietas? Adoramos ouvir
        você!
        Entre em contato conosco através do formulário abaixo.
    </p><br>
    <section>
        <fieldset>
            <legend><strong>Informações de contato</strong></legend>
            <form id="contact-form">
                <input type="text" name="Nome" placeholder="Nome:" required><br>
                <input type="email" name="Email" placeholder="Email:" required><br>
                <input type="number" name="Telefone" placeholder="Telefone:"><br>
                <input type="number" name="Idade" placeholder="Idade:"><br>

                <input type="checkbox" value="Duvida" name="Duvida" id="Duvida">
                <label for="Duvida">Dúvida</label>

                <input type="checkbox" value="Sugestao" name="Sugestao" id="Sugestao">
                <label for="Sugestao">Sugestão</label>

                <input type="checkbox" value="Experiencia" name="Experiencia" id="Experiencia">
                <label for="Experiencia">Experiência</label>

                <input type="checkbox" value="Relatar um erro no site" name="Relatarumerronosite"
                    id="Relatarumerronosite">
                <label for="Relatarumerronosite">Relatar um erro no site</label>

                <input type="checkbox" value="Reclamacao" name="Reclamacao" id="Reclamacao">
                <label for="Reclamacao">Reclamação</label><br>

                <textarea id="comentarios" name="Comentarios" placeholder="Comentários:" rows="10"
                    cols="60"></textarea><br><br>

                <button type="submit" id="sendButton">Enviar</button><br>
            </form>
        </fieldset>
    </section><br>
    <script src="contato.js"></script>

</body>

</html>
