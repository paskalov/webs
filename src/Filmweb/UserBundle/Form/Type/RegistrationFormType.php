<?php

namespace Filmweb\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array("label"=>"Imię:"));
        $builder->add('surname', 'text', array("label"=>"Nazwisko:"));
        $builder->add('phone_number', 'text', array("label"=>"Telefon:"));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'filmweb_user_registration';
    }
}