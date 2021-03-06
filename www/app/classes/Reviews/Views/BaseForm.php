<?php


namespace App\Reviews\Views;


class BaseForm extends \Core\Views\Form
{
    public function __construct($data = [])
    {
        $this->data = [
            'fields' => [
                'review' => [
                    'label' => 'Write a review: ',
                    'type' => 'text',
                ],
//                'rate' => [
//                    'label' => 'Rate',
//                    'type' => 'text',
//                ]
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Submit',
                ]
            ]
        ];
    }
}
