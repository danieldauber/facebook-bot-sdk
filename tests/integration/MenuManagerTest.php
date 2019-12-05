<?php

namespace CodeBot;

use PHPUnit\Framework\TestCase;

class MenuManagerTest extends TestCase
{
    public function testMakeMenu()
    {

        $menu = new MenuManager('default');

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

        foreach ($call_to_actions as $action) {
            $menu->callToAction($action['id'], $action['type'], $action['title'], $action['parent_id'], $action['value']);
        }

        $callSendApi =  new CallSendApi('EAAKLf3nkKU0BAH3XrzbEhGCReZB9Wu5CTxqWQXDrJLye1xZAXZBNDP7KjUoxBZCrM6SZAgg9ESN5UffJkoEpd0BU7bx9ODvAcboep5T6Nhd7FTzHfGGVhucb7XC5OW4cjH5qIbfZB0vkMpD5Y2p6PTJb5AajsZBzWK7BkAUk8xqbAZDZD');
        $result = $callSendApi->make($menu->toArray(), CallSendApi::URL_PROFILE);

        $this->assertTrue(is_string($result));
    }
}
