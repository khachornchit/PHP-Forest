<?php
class CollectionTest extends PHPUnit\Framework\TestCase
{
    protected $collection;

    public function setUp()
    {
        $this->collection = new \App\Support\Collection([
            'one', 'two', 'three',
        ]);
    }

    /** @test */
    public function empty_instantiated_collection_returns_no_items()
    {
        $this->assertNotEmpty($this->collection->get());
    }

    /** @test */
    public function count_is_correct()
    {
        $this->assertEquals($this->collection->count(), 3);
    }

    /** @test */
    public function assert_count()
    {
        $this->assertCount(3, $this->collection->get());
        $this->assertEquals($this->collection->get()[0], 'one');
        $this->assertEquals($this->collection->get()[1], 'two');
        $this->assertEquals($this->collection->get()[2], 'three');
    }

    /** @test */
    public function collection_is_instance_of_iterator_aggregate()
    {
        $this->assertInstanceOf(IteratorAggregate::class, $this->collection);
    }

    /** @test */
    public function collection_can_be_iterated()
    {
        $collection = new App\Support\Collection([
            'one', 'two', 'three',
        ]);

        $items = [];

        foreach ($collection as $item) {
            $items[] = $item;
        }

        $this->assertCount(3, $items);
        $this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());
    }

    /** @test */
    public function collection_can_be_merge()
    {
        $collection1 = new App\Support\Collection([
            'one', 'two',
        ]);

        $collection2 = new App\Support\Collection([
            'three', 'four', 'five',
        ]);

        $newCollection = $collection1->merge($collection2);

        $this->assertCount(5, $newCollection->get());
    }
}
