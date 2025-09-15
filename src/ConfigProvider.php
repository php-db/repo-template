<?php

declare(strict_types=1);

namespace PhpDb\ChangeIt;

final class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies(): array
    {
        return [
            'aliases'    => [
                // Add your service aliases here
            ],
            'delegators' => [
                // Add your service delegators here
            ],
            'factories'  => [
                // Add your service factories here
            ],
            'invokables' => [
                // Add your invokable classes here
            ],
        ];
    }
}
