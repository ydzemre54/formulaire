<?php

interface DAOInterface {

    public function create(AbstractEntity $entity);
    
    public function readOne(int $id): AbstractEntity;
    
    public function readAll(): array;
    
    public function update(AbstractEntity $entity): bool;

    public function delete(AbstractEntity $entity): bool;

}