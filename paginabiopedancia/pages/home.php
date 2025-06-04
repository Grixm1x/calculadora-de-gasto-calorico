<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/hoome.css">
    <title>Home</title>
</head>

<body>
    <h2>Cálculo para Homens</h2>
    <div id="homem">
        <input id="peso" type="text" placeholder="Digite seu peso (kg)"><br>
        <input id="idade" type="text" placeholder="Digite sua idade"><br>
        <input id="altura" type="text" placeholder="Digite sua altura (cm)"><br>
        <button onclick="calculargasto()">Calcular</button>
    </div>
    <div id="resultado" class="box"></div>

    <h2>Cálculo para Mulheres</h2>
    <div id="mulher">
        <input id="peso2" type="text" placeholder="Digite seu peso (kg)"><br>
        <input id="idade2" type="text" placeholder="Digite sua idade"><br>
        <input id="altura2" type="text" placeholder="Digite sua altura (cm)"><br>
        <button onclick="calculargastoMulher()">Calcular</sbutton>
    </div>
    <div id="resultado1" class="box"></div>
    <script src="home.js"></script>

</body>

</html>