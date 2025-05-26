# LSP — Princípio da Substituição de Liskov  

## O que é?  

O **Princípio da Substituição de Liskov (Liskov Substitution Principle - LSP)** é o terceiro dos cinco princípios SOLID da programação orientada a objetos.  

> "Se *q(x)* é uma propriedade demonstrável dos objetos *x* de tipo *T*, então *q(y)* deve ser verdadeiro para objetos *y* de tipo *S*, onde *S* é um subtipo de *T*."  
> *(Barbara Liskov, 1987)*  

Se uma classe herda de outra, ela deve poder ser substituída pela classe pai sem quebrar o sistema.

---  

## Características  

- **Compatibilidade de tipos**: Subtipos devem respeitar o contrato da superclasse (métodos, assinaturas e comportamentos).  
- **Não introduzir exceções inesperadas**: Subtipos não devem lançar exceções não tratadas pela superclasse.  
- **Preservar invariantes**: Garantir que regras de negócio da superclasse sejam mantidas.  
- **Cumprir pré/pós-condições**:  
  - **Pré-condições**: Subtipos não podem exigir mais do que a superclasse.  
  - **Pós-condições**: Devem garantir pelo menos o mesmo resultado.  

---  

## Vantagens  

- Novos subtipos podem ser adicionados sem modificar código existente.  
- Garante que herança não cause comportamentos inesperados.  
- Objetos derivados podem ser mockados/intercambiados em testes.  
- Evita quebras em código que depende da superclasse.  

---  

## Referências

- [OOP - O princípio da substituição de Liskov (LSP)](https://www.macoratti.net/11/05/oop_lsp1.htm#:~:text=De%20forma%20bem%20simples%20o,substitu%C3%ADda%20pela%20sua%20classe%20derivada.%22)
- Marco Tulio Valente. Engenharia de Software Moderna: Princípios e Práticas para Desenvolvimento de Software com Produtividade, Editora: Independente, 2020. 
- [S.O.L.I.D.: Princípio de Substituição de Liskov](https://www.campuscode.com.br/conteudos/s-o-l-i-d-principio-de-substituicao-de-liskov)
