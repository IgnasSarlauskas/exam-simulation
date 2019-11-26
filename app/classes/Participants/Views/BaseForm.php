<?php

namespace App\Participants\Views;

class BaseForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'brand_name' => [
                    'label' => 'Brand',
                    'type' => 'select',
                    'options'=> \App\Participants\Participant::select_manufacturer()
                ],
                'model' => [
                    'label' => 'model',
                    'type' => 'text',
                ],
                'power' => [
                    'label' => 'Horse Power',
                    'type' => 'text',
                ],
                'year' => [
                    'label' => 'Year',
                    'type' => 'number',
                ],
                'picture' => [
                    'label' => 'Picture url',
                    'type' => 'text',
                ],
                
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Submit',
                ],
            ]
        ];
    }

}
