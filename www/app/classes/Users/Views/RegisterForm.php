<?php

namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form
{

    public function __construct($data = [])
    {
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'email' => [
                    'label' => 'Email',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_mail'
                        ]
                    ],
                ],
                'name' => [
                    'label' => 'Name',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_no_space',
                        ]
                    ],
                ],
                'surname' => [
                    'label' => 'Surname',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_no_space',
                        ]
                    ],
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],

            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Register',
                ],
            ],

            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }

}
