<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once('./LINEBotTiny.php');

$channelAccessToken = '<your channel access token>';
$channelSecret = '<your channel secret>';

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [
                                'type' => 'text',
                                'text' => $message['text']
                            ]
                        ]
                    ]);
                    break;
                default:
                    error_log('Unsupported message type: ' . $message['type']);
                    break;
            }
            break;
        default:
            error_log('Unsupported event type: ' . $event['type']);
            break;
    }
};

curl -v -X POST https://api.line.me/v2/bot/message/push \ -H 'Content-Type: application/json' \ -H 'Authorization: Bearer cylpb2KTGX17tf6hGfMzcSxp/BtdVc9YF+/FrNesoQ/r4cf+Ukond3JE8bSGNS/qn0+FT7jpNDKkeon64frAbm/rQuWppx9D0c1S4CBAn3lTpS5//sykhWPrwWWV9ChBEIocR/3ITj+akvujtNF4IgdB04t89/1O/w1cDnyilFU=' \ -d '{ "to": "U805edb5f9f8a2ddd3fe907d26fce9ab2", "messages":[ { "type":"text", "text":"Hello, world1" }, { "type":"text", "text":"Hello, world2" } ] }'