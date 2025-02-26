<?php

use PHPUnit\Framework\TestCase;

class HandleEventsCommandTest extends TestCase
{
    /**
     * @dataProvider eventDtoDataProvider
     */
    public function testShouldEventBeRanReceiveEventDtoAndReturnCorrectBool(array $event, bool $shouldEventBeRan): void
    {
        $handleEventsCommand = new \App\Commands\HandleEventsCommand(new \App\Application(dirname(__DIR__)));
        $result = $handleEventsCommand->shouldEventBeRan($event);
        self::assertEquals($result, $shouldEventBeRan);
    }
    
    public static function eventDtoDataProvider(): array
    {
        return [
            // true
            [
                [
                    'minute' => date('i'),
                    'hour' => date('H'),
                    'day' => date('d'),
                    'month' => date('m'),
                    'day_of_week' => date('w'),
                ],
                true
            ],
            [
                [
                    'minute' => date('i'),
                    'hour' => date('H'),
                    'day' => date('d'),
                    'month' => date('m'),
                    'day_of_week' => null,
                ],
                true
            ],
            [
                [
                    'minute' => null,
                    'hour' => null,
                    'day' => null,
                    'month' => null,
                    'day_of_week' => null,
                ],
                true
            ],
            // false
            [
                [
                    'minute' => date('i'),
                    'hour' => date('H'),
                    'day' => date('d'),
                    'month' => date('m'),
                    'day_of_week' => 10,
                ],
                false
            ],
            [
                [
                    'minute' => 'X',
                    'hour' => 'X',
                    'day' => 'X',
                    'month' => 'X',
                    'day_of_week' => 'X',
                ],
                false
            ],
            // error for test
            // [
            //     [
            //         'minute' => date('i'),
            //         'hour' => date('H'),
            //         'day' => date('d'),
            //         'month' => date('m'),
            //         'day_of_week' => date('w'),
            //     ],
            //     false
            // ],
        ];
    }
}