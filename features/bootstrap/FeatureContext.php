<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @BeforeScenario
     */
    public function resize()
    {
        $session = $this->getSession();
        $session->resizeWindow(1440, 900, 'current');
    }

    /**
     * @Given (Eu) aguardo :arg1 segundo(s)
     */
    public function aguardoSegundos($arg1)
    {
        sleep($arg1);
    }

    /**
     * @Given (Eu) busco no google :arg1
     */
    public function busca($arg1)
    {
        $this->visit("http://google.com.br");
        $this->fillField('q', 'behat php');
        $this->aguardoSegundos(5);
        $this->clickLink('Behat Documentation');
        $this->assertPageContainsText('Behat Documentation');
    }

    public function spin ($func, $timeout=5)
    {
        for ($i = 0; $i < $timeout; $i++) {
            try {
                if ($result = $func($this)) {
                    return $result;
                }
            } catch (Exception $e) {
                // tratar exception
            }
            sleep(1);
        }
        throw new Exception('Timeout elemento não encontrado');
    }

    /**
     * @Then devo visualizar :arg1
     */
    public function devoVisualizar($arg1)
    {
        $this->spin(function ($this) use ($arg1) {
            $page = $this->getSession()->getPage();
            $success = $page->find('css', '#success');
            return $success->isVisible();
        });
    }
}
