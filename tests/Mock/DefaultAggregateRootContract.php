<?php

/**
 * This file is part of prooph/event-sourcing.
 * (c) 2014-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ProophTest\EventSourcing\Mock;

use Iterator;
use Prooph\Common\Messaging\Message;

interface DefaultAggregateRootContract
{
    public static function reconstituteFromHistory(Iterator $historyEvents): DefaultAggregateRootContract;

    public function getVersion(): int;

    public function getId(): string;

    /**
     * @return Message[]
     */
    public function popRecordedEvents(): array;

    public function replay($event): void;
}
