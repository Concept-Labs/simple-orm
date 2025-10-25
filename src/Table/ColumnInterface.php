<?php
namespace Concept\SimpleOrm\Table;

interface ColumnInterface
{
    public function getName(): string;

    public function isPrimary(): bool;

    public function getType(): string;

    public function getDefault(): mixed;

    public function isNullable(): bool;

    public function isAutoIncrement(): bool;
}