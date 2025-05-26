<?php
// ANTES
// Acesso em cadeia → cria alto acoplamento e fragilidade.
class Endereco { private $cidade; public function __construct($cidade) { $this->cidade = $cidade; } public function getCidade() { return $this->cidade; } }
class Pessoa { private $endereco; public function __construct($e) { $this->endereco = $e; } public function getEndereco() { return $this->endereco; } }
class Empresa { private $gerente; public function __construct($g) { $this->gerente = $g; } public function getGerente() { return $this->gerente; } }

$empresa = new Empresa(new Pessoa(new Endereco("São Paulo")));
echo $empresa->getGerente()->getEndereco()->getCidade(); // Muitas chamadas encadeadas
?>

<?php
// DEPOIS
// Cada classe encapsula o acesso → menos acoplamento.

class Pessoa { private $endereco; public function __construct($e) { $this->endereco = $e; } public function getCidade() { return $this->endereco->getCidade(); } }
class Empresa { private $gerente; public function __construct($g) { $this->gerente = $g; } public function getCidadeGerente() { return $this->gerente->getCidade(); } }

$empresa = new Empresa(new Pessoa(new Endereco("Rio de Janeiro")));
echo $empresa->getCidadeGerente(); // Simples e seguro
?>