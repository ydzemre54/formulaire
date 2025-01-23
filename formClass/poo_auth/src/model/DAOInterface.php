<?php

interface DAOInterface {

    public function create(AbstractEntity $entity);
    
    public function readOne(int $id): AbstractEntity;/*
    {
        try {
            $db = Database::getInstance();
            $stmt = $db->prepare("SELECT * from utilisateurs WHERE id = ?");
            $stmt->execute([ $id ]);
            return $stmt->fetch();
        } catch (PDOException $exc) {
            exit($exc->getMessage());
        }
    }*/
    
    public function readAll(): array;/*{
        try {
            $db = Database::getInstance();
            return $db->query("SELECT * from utilisateurs");
        } catch (PDOException $exc) {
            exit($exc->getMessage());
        }
    };*/

    
    public function update(AbstractEntity $entity): bool;

    public function delete(AbstractEntity $entity): bool;
}