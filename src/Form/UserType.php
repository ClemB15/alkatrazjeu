<?php
// /src/Form/UserType.php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullName', TextType::class, array(
                'attr' => array('placeholder' => 'Nom Complet', 'class' =>'input'),
                'label' => false))
            ->add('email', EmailType::class, array(
                'attr' => array('placeholder' => 'E-Mail', 'class' =>'input'),
                'label' => false))
            ->add('username', TextType::class, array(
                'attr' => array('placeholder' => 'Pseudo','class' =>'input'),
                'label' => false))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => false),
                'second_options' => array('label' => false),

            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}