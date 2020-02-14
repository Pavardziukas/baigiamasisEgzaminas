<?php

namespace App\Participants\Views;

class BaseForm extends \Core\Views\Form
{

    public function __construct($data = [])
    {
        $this->data = [
            'fields' => [
                'name' => [
                    'label' => 'Vardas',
                    'type' => 'text',
                ],
                'surname' => [
                    'label' => 'Pavardė',
                    'type' => 'text',
                ],
                'city' => [
                    'label' => 'Miestas',
                    'type' => 'text',
                ],
                'age' => [
                    'label' => 'amžius',
                    'type' => 'number',
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
