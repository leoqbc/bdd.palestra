#language: pt

Funcionalidade: Busca google
    Para Encontrar um resultado
    Como um usuario comum
    Devo buscar por palavra e encontrar o resultado

   @javascript
   Cenário: Buscar Behat e entrar na página
      Dado Eu estou em "http://google.com.br"
      E Eu preencho "q" com "Behat php"
      E Eu aguardo 2 segundos
      Quando Eu sigo o link "Behat Documentation"
      Então Eu devo ver "Behat Documentation"

   @javascript
   Cenário: Buscar com uma expressão só
      Dado Eu busco no google "Behat php"
