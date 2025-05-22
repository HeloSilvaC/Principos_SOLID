class Desconto:
    def calcular(self, preco):
        return preco

class DescontoNatal(Desconto):
    def calcular(self, preco):
        return preco * 0.9  # 10% de desconto

class DescontoAnoNovo(Desconto):
    def calcular(self, preco):
        return preco * 0.8  # 20% de desconto
