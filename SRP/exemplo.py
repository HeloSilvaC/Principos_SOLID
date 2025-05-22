class Usuario:
    def __init__(self, nome):
        self.nome = nome

    def salvar_usuario(self):
        print(f"Salvando {self.nome} no banco de dados.")

class EmailService:
    def enviar_email_bem_vindo(self, usuario):
        print(f"Enviando e-mail de boas-vindas para {usuario.nome}.")
