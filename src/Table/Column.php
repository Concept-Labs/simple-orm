<?php
namespace Concept\SimpleOrm\Table;

class Column implements ColumnInterface
{
    protected string $name;
    protected bool $primary;
    protected string $type;
    protected mixed $default;
    protected bool $nullable;
    protected bool $autoIncrement;

    public function __construct(
        string $name,
        bool $primary,
        string $type,
        mixed $default,
        bool $nullable,
        bool $autoIncrement
    ) {
        $this->name = $name;
        $this->primary = $primary;
        $this->type = $type;
        $this->default = $default;
        $this->nullable = $nullable;
        $this->autoIncrement = $autoIncrement;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isPrimary(): bool
    {
        return $this->primary;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getDefault(): mixed
    {
        return $this->default;
    }

    public function isNullable(): bool
    {
        return $this->nullable;
    }

    public function isAutoIncrement(): bool
    {
        return $this->autoIncrement;
    }
}