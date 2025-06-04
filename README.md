# 🧮 Calculadora de Gasto Calórico Diário

Este é um projeto simples em PHP, HTML, CSS e JavaScript que calcula o **gasto calórico diário** de homens e mulheres com base em peso, altura e idade, incluindo diferentes níveis de atividade física (sedentário, moderado, ativo e extremamente ativo).

## 🚀 Funcionalidades

- Cálculo do **gasto calórico basal** (sem atividade física).
- Cálculo do **gasto calórico estimado** com base em diferentes estilos de vida:
  - Sedentário (× 1.2)
  - Moderado (× 1.55)
  - Ativo (× 1.725)
  - Extremamente ativo (× 1.9)
- Interface separada para **homens e mulheres**, com fórmulas adequadas para cada sexo.

## 📐 Fórmulas Utilizadas

- **Homens** (Equação de Harris-Benedict):
- 66 + (13.7 x peso em kg) + (5 x altura em cm) - (6.8 x idade em anos).
- **Mulheres** (Equação de Mifflin-St Jeor):
- 655 + (9.6 x peso em kg) + (1.8 x altura em cm) - (4.7 x idade em anos).


