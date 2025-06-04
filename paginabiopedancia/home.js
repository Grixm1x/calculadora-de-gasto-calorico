function calculargasto() {
   
    let peso = parseInt(document.getElementById("peso").value);
    let idade = parseInt(document.getElementById("idade").value);
    let altura = parseInt(document.getElementById("altura").value);

    if(peso > 0 && idade > 0 && altura > 0){
        let gastoCaloricoDiario = 66 + (13.7 * peso) + (5 * altura) - (6.8 * idade);
        let sedentario = gastoCaloricoDiario * 1.2;
        let moderado = gastoCaloricoDiario * 155;
        let ativo = gastoCaloricoDiario * 1725;
        let extremamente = gastoCaloricoDiario * 1.9;
        document.getElementById("resultado").innerText =
            `Gasto com estilo de vida:
            - Sem atividade: ${gastoCaloricoDiario.toFixed(2)} calorias. 
            - Sedentário: ${sedentario.toFixed(2)} calorias.
            - Moderado: ${moderado.toFixed(2)} calorias.
            - Ativo: ${ativo.toFixed(2)} calorias.
            - Extremamente ativo: ${extremamente.toFixed(2)}s calorias.`;
        } else {
        document.getElementById("resultado").innerText = "Por favor, insira valores válidos.";
    }
}
function calculargastoMulher() {
    let peso1 = parseInt(document.getElementById("peso2").value);
    let idade1 = parseInt(document.getElementById("idade2").value);
    let altura1 = parseInt(document.getElementById("altura2").value);

    if(peso1 > 0 && idade1 > 0 && altura1 > 0){
        let gastoCaloricoDiario1 = 665 + (9.6 * peso1) + (1.8 * altura1) - (4.7 * idade1);
        let sedentario1 = gastoCaloricoDiario1 * 1.2;
        let moderado1 = gastoCaloricoDiario1 * 155;
        let ativo1 = gastoCaloricoDiario1 * 1725;
        let extremamente1 = gastoCaloricoDiario1 * 1.9;
        document.getElementById("resultado1").innerText =
            `Gasto com estilo de vida: 
            - Sem atividade: ${gastoCaloricoDiario1.toFixed(2)} calorias.
            - Sedentário: ${sedentario1.toFixed(2)} calorias.
            - Moderado: ${moderado1.toFixed(2)} calorias.
            - Ativo: ${ativo1.toFixed(2)} calorias.
            - Extremamente ativo: ${extremamente1.toFixed(2)} calorias.`;

    } else {
        document.getElementById("resultado1").innerText = "Por favor, insira valores válidos.";
    }
}