<?php
// ANTES
// A classe faz duas coisas: gerencia dados e cuida da persistência.
// Problema: A classe mistura lógica de negócio (usuário) com persistência (salvar).
class Usuario {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function salvar() {
        echo "Salvando {$this->nome}";
    }
}
?>

<?php
// DEPOIS
// Agora, cada classe tem uma responsabilidade
// Vantagem: Separação clara entre dados e persistência → mais fácil de manter e testar.
class Usuario {
    private $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
}

class UsuarioRepositorio {
    public function salvar(Usuario $usuario) {
        echo "Salvando {$usuario->getNome()}";
    }
}
?>