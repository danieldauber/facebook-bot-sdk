<?php

namespace CodeBot\Message;

class File implements Message
{
    private $recipientId;

    public function __construct(int $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function message(string $message): array
    {
        return [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'file',
                    'payload' => [
                        'url' => $message
                    ]
                ]
            ],
        ];
    }
}
