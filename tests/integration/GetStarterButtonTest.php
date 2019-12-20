<?php

namespace CodeBot;

use PHPUnit\Framework\TestCase;

class GetStarterButtonTest extends TestCase
{

    public function testAddGetStartedButton()
    {
        $data = (new GetStartedButton())->add('Iniciar');

        $callSendApi =  new CallSendApi('EAAKLf3nkKU0BAH3XrzbEhGCReZB9Wu5CTxqWQXDrJLye1xZAXZBNDP7KjUoxBZCrM6SZAgg9ESN5UffJkoEpd0BU7bx9ODvAcboep5T6Nhd7FTzHfGGVhucb7XC5OW4cjH5qIbfZB0vkMpD5Y2p6PTJb5AajsZBzWK7BkAUk8xqbAZDZD');

        $result = $callSendApi->make($data, CallSendApi::URL_PROFILE);

        $this->assertTrue(is_string($result));
    }

    public function testRemoveGetStartedButton()
    {

        $data = (new GetStartedButton())->remove();

        $callSendApi =  new CallSendApi('EAAKLf3nkKU0BAH3XrzbEhGCReZB9Wu5CTxqWQXDrJLye1xZAXZBNDP7KjUoxBZCrM6SZAgg9ESN5UffJkoEpd0BU7bx9ODvAcboep5T6Nhd7FTzHfGGVhucb7XC5OW4cjH5qIbfZB0vkMpD5Y2p6PTJb5AajsZBzWK7BkAUk8xqbAZDZD');

        $result = $callSendApi->make($data, CallSendApi::URL_PROFILE, 'DELETE');

        $this->assertTrue(is_string($result));
    }
}
