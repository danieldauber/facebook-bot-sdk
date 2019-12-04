<?php

namespace CodeBot\TemplatesMessage;

use CodeBot\Element\Button;
use CodeBot\Element\Product;
use PHPUnit\Framework\TestCase;

class listTemplateTest extends TestCase
{
    public function testListProduct()
    {

        $product = new Product(
            'Produto',
            'https://www.idealmarketing.com.br/blog/wp-content/uploads/2018/09/marketing-de-produto-conceito.jpg',
            'Subtitulo do Produto',
            new Button('web_url', null, 'http://www.google.com')
        );

        $template = new ListTemplate(1234);
        $template->add($product);

        $actual = $template->message('message');

        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'list',
                        'buttons' => [
                            [
                                'title' => 'Produto',
                                'image_url' => 'https://www.idealmarketing.com.br/blog/wp-content/uploads/2018/09/marketing-de-produto-conceito.jpg',
                                'subtitle'  => 'Subtitulo do Produto',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'http://www.google.com'
                                ],
                            ]
                        ]
                    ]
                ]
            ],
        ];

        $this->assertEquals($expected, $actual);
    }
}
