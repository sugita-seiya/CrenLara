<?php
declare(strict_types=1);

namespace App\Entities;

class Article
{
    protected $name;
    protected $userid;

    public function __construct(string $name ,int $userid)
    {
        $this->name  = $name;
        $this->id     = $userid;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }
}