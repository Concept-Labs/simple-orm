<?php
namespace Concept\SimpleOrm\Record;

interface RecordInterface
{
    public function getId(): mixed;

    public function toArray(): array;

    public function fromArray(array $data): static;

    public function isNew(?bool $new = null): bool;

    public function persist(): static;

    public function isDeleted(): bool;
}
