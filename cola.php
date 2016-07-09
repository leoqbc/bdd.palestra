./behat -dl


#language: pt

Funcionalidade: Cadastro de usuário
    Para acessar a plataforma
    Um novo usuário deverá conseguir fazer o cadastro
    Preenchendo as informações de forma correta

   @javascript
   Cenário: Cadastro básico
      Dado Eu estou na página de entrada
      E Eu preencho "nome" com "João Lima"
      E Eu preencho "endereco" com "Rua abl ablbbla, 345"
      E Eu preencho "telefone" com "11 9876-1234"
      E Eu preencho "email" com "teste@teste.com"
      Quando Eu pressiono "Cadastrar"
      Então devo ver "Cadastro realizado com sucesso"

   @javascript
   Esquema do Cenário: Multiplos cadastros
      Dado Eu estou na página de entrada
      E Eu preencho "nome" com <nome>
      E Eu preencho "endereco" com <endereco>
      E Eu preencho "telefone" com <telefone>
      E Eu preencho "email" com <email>
      Quando Eu pressiono "Cadastrar"
      Então devo visualizar "Cadastro realizado com sucesso"

      Exemplos:
        | nome      | endereco           | telefone        | email              |
        | "Ricardo" | "Rua teste1, 123"  | "11 99882-9987" | "teste1@teste.com" |
        | "Luan"    | "Rua teste2, 123"  | ""              | "teste2@teste.com" |
        | "Camilo"  | "Rua teste3, 123"  | "11 33322-6655" | "teste3@teste.com" |
        | "João"    | "Rua teste4, 123"  | "11 43221-2345" | "teste4@teste.com" |
        | "Carlos"  | "Rua teste5, 123"  | "11 66666-6666" | "teste5@teste.com" |
        | "Pedro"   | "Rua teste6, 123"  | "11 77777-7777" | "teste6@teste.com" |

   @javascript
   Cenário: Multiplos cadastros
      Dado Eu estou na página de entrada
      E rodo um javascript aqui
      E aguardo 10 segundos




    /**
     * @Then devo visualizar :arg1
     */
    public function devoVisualizar($arg1)
    {
        $page = $this->getSession()->getPage();
        $success = $page->find('css', '#success');
        
        $this->spin(function () use ($success) {
            return $success->isVisible();
        });

        if ($success->getText() != $arg1) {
            throw new Exception('Texto não confere');
        }
    }

links:

Behat: behat.org

Gherkin: http://docbehat.readthedocs.io/pt/latest/guides/1.gherkin.html

Mink: mink.behat.org

Selenium: www.seleniumhq.org

10 dicas valiosas: http://www.tentacode.net/10-tips-with-behat-and-mink
