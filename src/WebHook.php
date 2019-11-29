<?php

namespace CodeBot;

class WebHook
{
    public function check(string $token)
    {
        $hubmode = \filter_input(INPUT_GET, 'hub_mode');
        $hubVerifyToken = \filter_input(INPUT_GET, 'hub_verify_token');

        if ($hubmode === 'subscribe' and $hubVerifyToken === $token) {
            return \filter_input(INPUT_GET, 'hub_challenge');
        }
        return false;
    }
}
