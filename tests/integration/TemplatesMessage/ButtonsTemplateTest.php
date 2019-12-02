<?php

namespace CodeBot\TemplatesMessage;

use PHPUnit\Framework\TestCase;
use CodeBot\Element\Button;

class ButtonsTemplateTest extends TestCase
{

    public function testRetornoComTipoPostBack()
    {
        $buttonsTemplate = new ButtonsTemplate(1234);
        $buttonsTemplate->add(new Button('postback', 'Uma resposta do bot', 'resposta'));
        $actual = $buttonsTemplate->message('Um exemplo de botão');

        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'button',
                        'text' => 'Um exemplo de botão',
                        'buttons' => [
                            [
                                'type' => 'postback',
                                'title' => 'Uma resposta do bot',
                                'payload' => 'resposta'
                            ]
                        ]
                    ]
                ]
            ],

        ];

        $this->assertEquals($expected, $actual);
    }
}
