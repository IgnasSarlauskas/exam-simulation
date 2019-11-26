<?php

namespace App\Participants;

class Participant {

    private $data = [];

//    This array is for select input 


    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'brand_name' => null,
                'model' => null,
                'power' => null,
                'year' => null,
                'picture' => null,
            ];
        }
    }

    public function select_manufacturer() {
        $manufacturers = [
            'audi', 'bmw'
        ];
        if (!empty($manufacturers)) {
            foreach ($manufacturers as $value) {
                $arr[] = $value;
            }
            return $arr;
        }
    }

    /**
     * * Sets all data from array
     * @param $array
     */
    public function setData($array) {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }
        $this->setName($array['brand_name'] ?? null);
        $this->setModel($array['model'] ?? null);
        $this->setPower($array['power'] ?? null);
        $this->setYear($array['year'] ?? null);
        $this->setPicture($array['picture'] ?? null);
    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData() {
        return [
            'id' => $this->getId(),
            'brand_name' => $this->getName(),
            'model' => $this->getModel(),
            'power' => $this->getPower(),
            'year' => $this->getYear(),
            'picture' => $this->getPicture(),
        ];
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    /**
     * @return int|null
     */
    public function getId() {
        return $this->data['id'];
    }

    /**
     * Sets name
     * @param string $name
     */
    public function setName(string $name) {
        $this->data['brand_name'] = $name;
    }

    /**
     * Returns name
     * @return string
     */
    public function getName() {
        return $this->data['brand_name'];
    }

    /**
     * Sets data surname
     * @param string $model
     */
    public function setModel(string $model) {
        $this->data['model'] = $model;
    }

    /**
     * @return mixed
     */
    public function getModel() {
        return $this->data['model'];
    }

    /**
     * Sets data city
     * @param string $power
     */
    public function setPower(string $power) {
        $this->data['power'] = $power;
    }

    /**
     * @return mixed
     */
    public function getPower() {
        return $this->data['power'];
    }

    /**
     * Sets data year
     * @param inetger year
     */
    public function setYear(string $year) {
        $this->data['year'] = $year;
    }

    /**
     * @return mixed
     */
    public function getYear() {
        return $this->data['year'];
    }

    /**
     * Sets data picture
     * @param string picture
     */
    public function setPicture(string $picture) {
        $this->data['picture'] = $picture;
    }

    /**
     * @return mixed
     */
    public function getPicture() {
        return $this->data['picture'];
    }

}
