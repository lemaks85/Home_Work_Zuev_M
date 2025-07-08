<?php

use PHPUnit\Framework\TestCase;
use App\Application;
use App\Commands\HandleEventsDaemonCommand;

/**
 * @covers \App\Commands\HandleEventsDaemonCommand
 */
class HandleEventsDaemonCommandTest extends TestCase
{
    public function testGetCurrentTime()
    {
        $handleEventsDaemonCommand = new HandleEventsDaemonCommand(new Application(dirname(__DIR__)));

        $result = $handleEventsDaemonCommand->getCurrentTime();

        self::assertNotEmpty($result);

        self::assertEquals(
            [
                date("i"),
                date("H"),
                date("d"),
                date("m"),
                date("w")
            ],
            $result
        );
    }
}