<?php

namespace App\Form\Type\Security;

use App\Form\Model\Security\Login;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class LoginType
 * @package App\Form\Type\Security
 */
class LoginType extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('_username', EmailType::class, [
                "label" => "Votre adresse email :"
            ])
            ->add("_password", PasswordType::class, [
                "label" => "Votre mot de passe :"
            ])
            ->add("submit", SubmitType::class, [
                "label" => "Se connecter"
            ])
        ;
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Login::class
        ]);
    }
}
