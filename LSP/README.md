# LSP — Princípio da Substituição de Liskov

## O que é?
Se uma classe herda de outra, ela deve **poder ser usada no lugar da classe mãe sem problemas**.

## Exemplo explicado
Aqui o `Pinguim` quebra o LSP, porque herda de `Ave`, mas não consegue voar. O ideal seria não herdar nesse caso.
