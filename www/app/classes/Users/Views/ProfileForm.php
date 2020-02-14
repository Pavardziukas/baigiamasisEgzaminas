<?php


namespace App\Users\Views;

use App\App;

class ProfileForm extends \Core\Views\Form
{
    public function __construct($data = [])
    {
    $user = App::$session->getUser();
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'email' => [
                    'label' => 'Email',
                    'type' => 'email',
                    'value' => $user->getEmail(),
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
                    'value' => $user->getName(),
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
                    'value' => $user->getSurname(),
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
                    'value' => $user->getPassword(),
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],

            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Pakeisti',
                ],
            ],
//
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }
}