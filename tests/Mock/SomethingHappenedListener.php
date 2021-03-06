<?php

namespace HelloFresh\Tests\Engine\Mock;

use HelloFresh\Engine\Domain\DomainEventInterface;
use HelloFresh\Engine\EventBus\EventListenerInterface;

class SomethingHappenedListener implements EventListenerInterface
{
    use CounterTrait;

    /**
     * @inheritdoc
     */
    public function handle(DomainEventInterface $event)
    {
        $this->counter++;
    }

    /**
     * @inheritdoc
     */
    public function isSubscribedTo(DomainEventInterface $event)
    {
        return get_class($event) === SomethingHappened::class;
    }
}
