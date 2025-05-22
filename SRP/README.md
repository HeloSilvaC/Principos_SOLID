# SRP — Princípio da Responsabilidade Única

## O que é?
Cada classe deve ter **uma única responsabilidade**.

## Para que serve?
Deixa o código mais fácil de entender, manter e testar.

## Exemplo explicado
Aqui, a classe `Usuario` só cuida do usuário. A parte de enviar e-mail fica em `EmailService`. Assim, cada classe faz só uma coisa.
