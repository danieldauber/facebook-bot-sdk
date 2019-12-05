<?php

namespace CodeBot;

use PHPUnit\Framework\TestCase;
use CodeBot\Build\Solid;

class BotTest extends TestCase
{
    private $pageAcessToken = 'EAAKLf3nkKU0BAH3XrzbEhGCReZB9Wu5CTxqWQXDrJLye1xZAXZBNDP7KjUoxBZCrM6SZAgg9ESN5UffJkoEpd0BU7bx9ODvAcboep5T6Nhd7FTzHfGGVhucb7XC5OW4cjH5qIbfZB0vkMpD5Y2p6PTJb5AajsZBzWK7BkAUk8xqbAZDZD';


    public function testAddMenu()
    {

        $call_to_actions = [
            [
                'id' => 1,
                'type' => 'nested',
                'title' => 'O que posso fazer',
                'parent_id' => 0,
                'value' => null,
            ],
            [
                'id' => 2,
                'type' => 'web_url',
                'title' => 'Nosso site',
                'parent_id' => 0,
                'value' => 'http://google.com',
            ],
            [
                'id' => 3,
                'type' => 'web_url',
                'title' => 'Nosso Outro Site',
                'parent_id' => 1,
                'value' => 'http://google.com',
            ],
            [
                'id' => 4,
                'type' => 'postback',
                'title' => 'Opções iniciais',
                'parent_id' => 0,
                'value' => 'iniciar',
            ],

        ];
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAcessToken);

        $bot->addMenu('default', 'false', $call_to_actions);

        $this->assertTrue(true);
    }

    public function testRemoveMenu()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAcessToken);

        $bot->removeMenu();

        $this->assertTrue(true);
    }

    public function testAddGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAcessToken);

        $bot->addGetStartedButton('iniciar');

        $this->assertTrue(true);
    }

    public function testRemoveStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAcessToken);

        $bot->removeGetStartedButton();

        $this->assertTrue(true);
    }
}
