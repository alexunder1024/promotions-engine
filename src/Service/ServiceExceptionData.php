<?php

namespace App\Service;

class ServiceExceptionData
{
    public function __construct(protected int $statusCode, protected string $type)
    {
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string[]
     */
    public function toArray(): array
    {
        return [
            'type' => $this->type
        ];
    }
}