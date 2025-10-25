<?php
namespace Concept\SimpleOrm\Table;

interface TableInterface extends \Countable, \IteratorAggregate
{
    public function getName(): string;

    public function getPrimary(): ?string;

    public function getColumns(): array;

    public function hasColumn(string $column): bool;

    public function getColumnType(string $column): ?string;

    public function getColumnDefault(string $column): mixed;

    public function isColumnNullable(string $column): bool;

    public function isColumnAutoIncrement(string $column): bool;
}