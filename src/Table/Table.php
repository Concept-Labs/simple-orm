<?php
namespace Concept\SimpleOrm\Table;

use Concept\DBAL\DML\DmlManagerFactory;
use Concept\DBAL\DML\DmlManagerInterface;

class Table implements TableInterface
{
    protected string $name;

    protected array $primaries = [];

    /** @var ColumnInterface[] */
    protected array $columns = [];

    public function __construct(private DmlManagerInterface $dmlManager, $columnFactory)
    {

    }

    public function init(string $name): static
    {
        $this->name = $name;
        $this->describe();

        return $this;
    }

    protected function describe()
    {
    
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected function getDmlManager(): DmlManagerInterface
    {
        return $this->dmlManager;
    }

    public function getIterator(): \Traversable
    {
        yield from $this->columns;
    }
}