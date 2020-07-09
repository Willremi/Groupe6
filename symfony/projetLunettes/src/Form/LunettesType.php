<?php

namespace App\Form;

use App\Entity\Couleur;
use App\Entity\Lunettes;
use App\Entity\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class LunettesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'Nom Lunettes'
            ))
            
            ->add('prixLunettes', TextType::class, array(
                'label' => 'Prix des lunettes'
            ))
            ->add('description')
            ->add('quantite')
            ->add('statut')
            ->add('couleur', EntityType::class, array(
                'class' => Couleur::class, 
                'choice_label' => 'nom', 
                'multiple' => false, 
                'required' => false
            ))
            ->add('type', EntityType::class, array(
                'class' => Type::class, 
                'choice_label' => 'nom', 
                'multiple' => false, 
                'required' => false
            ))
            ->add('imageFile', FileType::class, array(
                'required' => false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Lunettes::class,
        ]);
    }
}
