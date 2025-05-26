# Lei de Demeter (Princípio do Menor Conhecimento)

## O que é?

A **Lei de Demeter (LoD)** é um princípio de design de software que promove o **baixo acoplamento** entre classes.

**Uma classe só deve chamar métodos de:**  
1. Ela mesma  
2. Seus próprios atributos  
3. Objetos criados por ela  
4. Objetos passados como parâmetro em seus métodos  

---

## Características

- **Encapsulamento rigoroso**: Limita o conhecimento sobre a estrutura interna de outros objetos.
- **Cadeias de chamadas curtas**: Evita sequências como `objetoA.getB().getC().listar()`.
- **Foco em interfaces**: A comunicação ocorre via métodos públicos, não através de navegação em grafos de objetos.

---

## Vantagens

- **Reduz acoplamento**: Mudanças em uma classe afetam menos outras partes do sistema.
- **Facilita refatoração**: Objetos são mais independentes e autocontidos.
- **Melhora a testabilidade**: Classes são mais isoladas e fáceis de mockar.
- **Torna o código mais previsível**: Cada classe tem responsabilidades claramente delimitadas.

---

## Referências

- [Lei de Demeter](https://dev.to/ino_gu/lei-de-demeter-4ldf)
- Marco Tulio Valente. Engenharia de Software Moderna: Princípios e Práticas para Desenvolvimento de Software com Produtividade, Editora: Independente, 2020. 
- [Entendendo a Lei de Demeter em Design de Software](https://dev.to/diegobrandao/entendendo-a-lei-de-demeter-em-design-de-software-3p5g)
