<?php

use PHPUnit\Framework\TestCase;
use App\Models\Event;
use App\Actions\EventSaver;

/**
 * @covers \App\Actions\EventSaver
 */
class EventSaverTest extends TestCase
{
    /**
     * @dataProvider eventDtoDataProvider
     */
    public function testHandleCallCorrectInsertInModel(array $eventDto, array $expectedArray): void
    {
        $mock = $this->getMockBuilder(Event::class)
            ->onlyMethods(['insert'])
            ->disableOriginalConstructor()
            ->getMock();
        $mock->expects($this->once())
            ->method('insert')
            ->with(
                'name, text, receiver_id, minute, hour, day, month, day_of_week',
                $expectedArray
            );
        $eventSaver = new EventSaver($mock);
        $eventSaver->handle($eventDto);
    }
    
    public static function eventDtoDataProvider(): array
    {
        return [
            [
                [
                    'name' => 'some-name',
                    'text' => 'some-text',
                    'receiver_id' => 'some-receiver',
                    'minute' => 'some-minute',
                    'hour' => 'some-hour',
                    'day' => 'some-day',
                    'month' => 'some-month',
                    'day_of_week' => 'some-week',
                ],
                [
                    'some-name',
                    'some-text',
                    'some-receiver',
                    'some-minute',
                    'some-hour',
                    'some-day',
                    'some-month',
                    'some-week',
                ],
            ],
            [
                [
                    'name' => 'some-name',
                    'text' => 'some-text',
                    'receiver_id' => 'some-receiver',
                    'minute' => null,
                    'hour' => null,
                    'day' => null,
                    'month' => null,
                    'day_of_week' => null,
                ],
                [
                    'some-name',
                    'some-text',
                    'some-receiver',
                    null,
                    null,
                    null,
                    null,
                    null,
                ],
            ]
        ];
    }
}