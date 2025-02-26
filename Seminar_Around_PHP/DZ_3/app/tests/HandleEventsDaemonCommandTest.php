<?php

use PHPUnit\Framework\TestCase;

class HandleEventsDaemonCommandTest extends TestCase
{
    public function testGetCurrentTime()
    {
        $handleEventsDaemonCommand = new \App\Commands\HandleEventsDaemonCommand(
            new \App\Application(dirname(__DIR__))
        );
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