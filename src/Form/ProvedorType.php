<?php

namespace App\Form;

use App\Entity\Proveedor;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProvedorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre')
            ->add('Correo_electronico', EmailType::class)
            ->add('Telefono_de_Contacto', NumberType::class)
            ->add('Tipo_de_Proveedor', ChoiceType::class ,  [
                    'choices'=>  [
                    'hotel'=> 'hotel'  ,
                    'pista'=> 'pista' ,
                    'complemento'=> 'complemento'
                  ]
             ])
            ->add('Estado', ChoiceType::class , [
                'choices'=>  [
                'activo'=> 'activo' ,
                'inactivo'=> 'inactivo' ,
                ]
         ])           
         ->add('Enviar', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proveedor::class,
        ]);
    }
}
