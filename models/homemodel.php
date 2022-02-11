<?php
class HomeModel extends DB{
    public function getHomeCategories()
    {
        $stm = $this->connection->query("SELECT * FROM categories WHERE home = 1");
        $stm->execute();
        return $stm->fetchAll();
    }
}