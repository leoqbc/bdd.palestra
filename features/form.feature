#language: pt

Funcionalidade: Busca google
    Para acessar a plataforma
    Um novo usuário deverá conseguir fazer o cadastro
    Preenchendo as informações de forma correta

   @javascript
   Cenário: Abrindo pagina inicial
      Dado Eu estou em "/"
      E Eu preencho "nome" com "João Lima"
      E Eu preencho "endereco" com "Rua abl ablbbla, 345"
      E Eu preencho "telefone" com "11 9876-1234"
      E Eu preencho "email" com "teste@teste.com"
      Quando Eu pressiono "Cadastrar"
      Então devo visualizar "Cadastro realizado com sucesso"



