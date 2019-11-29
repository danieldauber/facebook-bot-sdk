<?php

namespace CodeBot;

use CodeBot\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSentApiTest extends TestCase
{

    /**
     * @expectedException \GuzzleHttp\Exception\ClientException
     */

    public function testMakeRequest()
    {
        $message = (new Text(1))->message('hello');
        (new CallSendApi('c3g4334gf34'))->make($message);
    }
}
