<?php

namespace Domain\Model\Base;

/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 26/01/2018
 * Time: 20:58
 */

abstract class BaseEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * @var \DateTime
     */
    protected $lastUpdate;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BaseEntity
     */
    public function setId(int $id): BaseEntity
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate(): \DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime $creationDate
     * @return BaseEntity
     */
    public function setCreationDate(\DateTime $creationDate): BaseEntity
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdate(): \DateTime
    {
        return $this->lastUpdate;
    }

    /**
     * @param \DateTime $lastUpdate
     * @return BaseEntity
     */
    public function setLastUpdate(\DateTime $lastUpdate): BaseEntity
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
}