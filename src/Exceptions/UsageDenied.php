<?php

namespace Snow\Payments\Exceptions;

class UsageDenied extends LaravelSubbyException
{
    public function __construct($featureTag = '')
    {
        $message = "Usage of '{$featureTag}' has been denied.";

        parent::__construct($message);
    }
}
