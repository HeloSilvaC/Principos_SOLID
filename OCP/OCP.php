<?php
// ANTES
// A classe precisa ser modificada sempre que um novo tipo de relatório for adicionado.
// Problema: Não é aberta para extensão — cada novo tipo exige alterar a classe.
class Relatorio {
    public function gerar($tipo) {
        if ($tipo == 'PDF') {
            return "Gerando PDF...";
        } elseif ($tipo == 'HTML') {
            return "Gerando HTML...";
        }
    }
}
?>

<?php
// DEPOIS
// Cada formato é uma extensão, sem precisar modificar o código existente.
// Vantagem: Podemos criar novos formatos (ex.: JSON) sem alterar as classes existentes → mais flexível e robusto.
interface Formato {
    public function gerar();
}

class PDF implements Formato {
    public function gerar() {
        return "Gerando PDF...";
    }
}

class HTML implements Formato {
    public function gerar() {
        return "Gerando HTML...";
    }
}

class Gerador {
    public function gerar(Formato $formato) {
        return $formato->gerar();
    }
}
?>