<?php

namespace CodeBot\Message;

class Text
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
                'text' => $message,
                'metadata' => 'DEVELOPER_META_DATA'
            ],
        ];
    }
}
