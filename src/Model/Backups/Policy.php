<?php

namespace Platformsh\Client\Model\Backups;

class Policy
{
    private $interval;
    private $count;

    /**
     * Constructs a backup policy instance.
     *
     * @param string|int $interval
     *   The policy interval specification.
     * @param int        $count
     *   The number of backups to keep under this policy.
     */
    public function __construct($interval, $count)
    {
        $this->interval = $interval;
        $this->count = $count;
    }

    /**
     * Get the configured interval.
     *
     * @return string|int
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Get the configured number of backups to keep.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
}
