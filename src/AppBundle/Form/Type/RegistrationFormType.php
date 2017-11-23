<?php
/**
 * Created by PhpStorm.
 * User: webonise
 * Date: 23/11/17
 * Time: 10:36 AM
 */

namespace AppBundle\Form\Type;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => false,'attr' => array('placeholder' => 'form.email', 'class' => 'form-control'), 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => false,'attr' => array('placeholder' => 'form.username', 'class' => 'form-control'), 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => false,'attr' => array('placeholder' => 'form.password', 'class' => 'form-control')),
                'second_options' => array('label' => false,'attr' => array('placeholder' => 'form.password_confirmation', 'class' => 'form-control')),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('prn', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\IntegerType'), array('label' => false,'attr' => array('placeholder' => 'PRN', 'class' => 'form-control')));
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_token_id' => 'registration',
            // BC for SF < 2.8
            'intention' => 'registration',
        ));
    }

    // BC for SF < 3.0
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function  getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_registration';
    }
}
