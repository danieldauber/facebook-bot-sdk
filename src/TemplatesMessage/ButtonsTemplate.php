<?php

namespace CodeBot\TemplatesMessage;

use CodeBot\Message\Message;
use CodeBot\Element\ElementInterface;

class ButtonsTemplate implements Message
{
    protected $buttons = [];
    protected $recipientId;


    public function __construct(int $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function add(ElementInterface $element)
    {
        $this->buttons[] = $element->get();
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
                        'template_type' => 'button',
                        'text' => $message,
                        'buttons' => $this->buttons
                    ]
                ]
            ],
        ];
    }
}
