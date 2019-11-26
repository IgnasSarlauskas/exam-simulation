<?php

namespace App\Participants\Views;

class ApiForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'brand_name' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ]
                ],
                'model' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ]
                ],
                'power' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ]
                ],
                'year' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_year',
                        ]
                    ]
                ],
                'picture' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ]
                ],
            ],
            'callbacks' => [
                'success' => 'form_success',
                'fail' => 'form_fail',
            ]
        ];
    }

}
