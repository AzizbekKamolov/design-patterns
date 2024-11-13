<?php

class AlphabeticalOrderIterator implements Iterator
{
    private $collection;
    private int|string $position = 0;
    private bool $reverse = false;

    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function current(): mixed
    {
        return $this->collection->getItems()[$this->position];
    }

    public function next(): void
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function key(): int|string
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }
}


class WordsCollection implements IteratorAggregate
{
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem($item): void
    {
        $this->items[] = $item;
    }

    public function getIterator(): Iterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator(): Iterator
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}

//$collection = new WordsCollection();
//$collection->addItem("1");
//$collection->addItem("2");
//$collection->addItem("3");
//var_dump($collection->getIterator());
//exit();
//echo "Straight traversal:\n";
//foreach ($collection->getIterator() as $item) {
//    echo $item . "\n";
//}
//
//echo "\n";
//echo "Reverse traversal:\n";
//foreach ($collection->getReverseIterator() as $item) {
//    echo $item . "\n";
//}
///**
// * @return Generator
// */
//function custom(): Generator
//{
//    for ($i = 0; $i <= 10; $i++) {
//        yield $i;
//    }
//}
//
//
//$generator = custom();
////print_r(iterator_to_array($generator, false));
//foreach ($generator as $item) {
//    echo $item . PHP_EOL;
//}