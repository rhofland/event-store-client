<?php

namespace Madkom\EventStore\Client\Domain\Socket\Communication\Type;

use Madkom\EventStore\Client\Domain\Socket\Communication\Communicable;
use Madkom\EventStore\Client\Domain\Socket\Message\MessageType;
use Madkom\EventStore\Client\Domain\Socket\Message\SocketMessage;
use Madkom\EventStore\Client\Domain\Socket\Data;

/**
 * Class SubscriptionDroppedHandler
 *
 * @package Madkom\EventStore\Client\Domain\Socket\Communication\Type
 * @author Jur Jean
 */
class SubscriptionDroppedHandler implements Communicable
{

    /**
     * @inheritDoc
     */
    public function handle(MessageType $messageType, $correlationID, $data)
    {
        $dataObject = new Data\SubscriptionDropped();
        $dataObject->parseFromString($data);


        return new SocketMessage($messageType, $correlationID, $dataObject);
    }

}