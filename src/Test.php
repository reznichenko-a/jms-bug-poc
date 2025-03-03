<?php

declare(strict_types=1);

namespace Reznichenko\PocJmsBug;

use JMS\Serializer\Annotation\Type;

class Test
{
    /**
     * @Type("string|null") $name
     */
    protected ?string $name = null;

    /**
     * @Type("int|null") $age
     */
    protected ?int $age = null;

    /**
     * @Type("array|null") $error
     */
    protected ?array $array = null;
}
