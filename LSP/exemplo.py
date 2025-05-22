class Ave:
    def voar(self):
        print("Voando...")

class Andorinha(Ave):
    pass

class Pinguim(Ave):
    def voar(self):
        raise Exception("Pinguins não voam!")
