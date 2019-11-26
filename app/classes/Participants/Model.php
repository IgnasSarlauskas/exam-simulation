<?php

namespace App\Participants;

use \App\App;

class Model {

    private $table_name = 'Cars';

    public function __construct() {
        App::$db->createTable($this->table_name);
    }

    /**
     * Irašo $car i duombaze
     * @param Participant $car
     * @return bool
     */
    public function insert(Participant $car) {
        return App::$db->insertRow($this->table_name, $car->getData());
    }

    /**
     * @param array $conditions
     * @return array
     */
    public function get($conditions = []) {
        $cars = [];
        $rows = App::$db->getRowsWhere($this->table_name, $conditions);
        foreach ($rows as $row_id => $row_data) {
            $row_data['id'] = $row_id;
            $cars[] = new Participant($row_data);
        }
        
        return $cars;
    }

    /**
     * @param Participant $car
     * @return bool
     */
    public function update(Participant $car) {
        return App::$db->updateRow($this->table_name, $car->getId(), $car->getData());
    }

    /**
     * deletes all cars from database
     * @param Participant $car
     * @return bool
     */
    public function delete(Participant $car) {
        return App::$db->deleteRow($this->table_name, $car->getId());
    }

    public function __destruct() {
        App::$db->save();
    }

}
