<?php

namespace think\exception;

use RuntimeException;
use Throwable;

class ClassNotFoundException extends RuntimeException
{
    public function __construct(string $message, protected string $class = '', ?Throwable $previous = null)
    {
        $this->message = $message;

        parent::__construct($message, 0, $previous);
    }

    /**
     * 获取类名
     * @access public
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
}
