<?php

namespace MessageBird\Resources;

use MessageBird\Common;
use MessageBird\Objects;

class MmsMessages extends Base {

    /**
     * @param Common\HttpClient $HttpClient
     */
    public function __construct(Common\HttpClient $HttpClient)
    {
        $this->setObject(new Objects\MmsMessage());
        $this->setResourceName('mms');

        parent::__construct($HttpClient);
    }
}