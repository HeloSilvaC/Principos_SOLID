# Lei de Demeter

## O que é?
"Fale apenas com seus amigos diretos." Uma classe só deve chamar métodos de objetos que ela **tem**.

## Para que serve?
Deixa o código mais desacoplado e fácil de manter.

## Exemplo explicado
Em vez de `carro.motor.ligar()`, usamos `carro.ligar()`. A classe que usa o carro **não precisa saber que ele tem um motor**.
