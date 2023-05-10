<?php

namespace App\Api;

trait DateFilterBuilderTrait {
    
    public function setDateLimitOperator(string $operator) {
        $this->object->setDateLimitOperator($operator);
        return $this;
    }

    public function setDateLimitValue(\DateTime $dateTime) {
        $this->object->setDateLimitValue($dateTime);
        return $this;
    }

    public function setDateLimitCreated(string $created) {
        $this->object->setDateLimitCreated($created);
        return $this;
    }

    public function setDateLimitUpdated(string $updated) {
        $this->object->setDateLimitUpdated($updated);
        return $this;
    }

    public function setDateLimitDeleted(string $deleted) {
        $this->object->setDateLimitDeleted($deleted);
        return $this;
    }

}
