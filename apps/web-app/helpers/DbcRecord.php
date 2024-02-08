<?php

namespace app\helpers;

class DbcRecord
{
    private WeakReference $owner;
    private int $position;
    private int $index;

    public function __construct($position, $index, DbcReader $owner)
    {
        $this->position = $position;
        $this->index = $index;
        $this->owner = new WeakReference($owner);
    }

    public function getInt32Value($column)
    {
        /** @var DbcReader $owner */
        $owner = null;
        if (!$this->owner->tryGetTarget($owner))
            throw new \RuntimeException();

        return $owner->getInt32Value($this->index, $column);
    }

    public function getSingleValue($column)
    {
        /** @var DbcReader $owner */
        $owner = null;
        if (!$this->owner->tryGetTarget($owner))
            throw new \RuntimeException();

        return $owner->getSingleValue($this->index, $column);
    }

    public function getStringValue($column)
    {
        /** @var DbcReader $owner */
        $owner = null;
        if (!$this->owner->tryGetTarget($owner))
            throw new \RuntimeException();

        return $owner->getStringValue($this->index, $column);
    }
}
