<?php

namespace CodeBot\Message;

interface Message
{
    public function __construct(int $recipientId);
    public function message(string $message): array;
}
