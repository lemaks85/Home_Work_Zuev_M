<?php

use PHPUnit\Framework\TestCase;
use App\Application;
use App\Commands\SaveEventCommand;

/**
 * @covers \App\Commands\SaveEventCommand
 */
class SaveEventCommandTest extends TestCase
{
    /**
     * @dataProvider isNeedHelpDataProvider
     */
    public function testIsNeedHelp(array $options, bool $isNeedHelp)
    {
        $saveEventCommand = new SaveEventCommand(new Application(dirname(__DIR__)));

        $result = $saveEventCommand->isNeedHelp($options);

        self::assertEquals($result, $isNeedHelp);
    }

    public function isNeedHelpDataProvider()
    {
        return [
            [
                [
                    'name' => "some-name",
                    'text' => "some-text",
                    'receiver' => "some-reciver",
                    'cron' => "some-cron",
                    // 'help',
                    // 'h'
                ],
                false
            ],
            [
                [
                    'name' => "some-name",
                    'text' => "some-text",
                    'receiver' => "some-reciver",
                    'cron' => "some-cron",
                    'help' => 'some-help',
                    'h' => null
                ],
                true
            ],
            [
                [
                    'name' => "some-name",
                    'text' => "some-text",
                    'receiver' => "some-reciver",
                    'cron' => "some-cron",
                    'help' => null,
                    'h' => 'some-h'
                ],
                true
            ],
            [
                [
                    'name' => "some-name",
                    'text' => "some-text",
                    'receiver' => "some-reciver",
                    'cron' => null
                ],
                true
            ],
            [
                [
                    'name' => "some-name",
                    'text' => "some-text",
                    'receiver' => null,
                    'cron' => "some-cron",
                    // 'help',
                    // 'h'
                ],
                true
            ],
        ];
    }
}