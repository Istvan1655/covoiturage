<?php

namespace RTFMIS\Covoiturage\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

/**
 * Description of RegistrationFormType
 *
 * @author nendredi
 */
class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        
        $builder->add('nom', null, array('label' => 'form.name.last', 'translation_domain' => 'FOSUserBundle'))
                ->add('prenom', null, array('label' => 'form.name.first', 'translation_domain' => 'FOSUserBundle'))
                ->add('conducteur_depuis', "date", array('label' => 'form.driver.since', 'translation_domain' => 'FOSUserBundle'))
                ;
    }
    
    public function getName() {
        return 'rc_user_registration';
    }
}

?>
