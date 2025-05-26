<?php
// ANTES
// O quadrado herda de retângulo, mas muda o comportamento esperado.
// Problema: Ao usar Quadrado como Retangulo, a área calculada será incorreta → violação do LSP.
class Retangulo {
    protected $largura;
    protected $altura;

    public function setLargura($w) { $this->largura = $w; }
    public function setAltura($h) { $this->altura = $h; }
    public function getArea() { return $this->largura * $this->altura; }
}

class Quadrado extends Retangulo {
    public function setLargura($w) { $this->largura = $this->altura = $w; }
    public function setAltura($h) { $this->largura = $this->altura = $h; }
}

?>

<?php
// DEPOIS
// Não há herança; ambos implementam a mesma interface.
// Vantagem: Cada forma funciona de modo independente e previsível → respeita o LSP.
interface Forma {
    public function getArea();
}

class Retangulo implements Forma {
    private $largura, $altura;
    public function __construct($w, $h) { $this->largura = $w; $this->altura = $h; }
    public function getArea() { return $this->largura * $this->altura; }
}

class Quadrado implements Forma {
    private $lado;
    public function __construct($l) { $this->lado = $l; }
    public function getArea() { return $this->lado * $this->lado; }
}
?>