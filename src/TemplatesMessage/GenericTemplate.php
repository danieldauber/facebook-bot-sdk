<?php

namespace CodeBot\TemplatesMessage;

use CodeBot\Element\ElementInterface;

class GenericTemplate implements TemplateInterface
{
    protected $products = [];
    protected $recipientId;


    public function __construct(int $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function add(ElementInterface $element)
    {
        $this->products[] = $element->get();
    }

    public function message(string $message): array
    {

        return [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'generic',
                        'buttons' => $this->products
                    ]
                ]
            ],
        ];
    }
}
