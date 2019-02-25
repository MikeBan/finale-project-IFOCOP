<?php

namespace Laviva\BackOfficeBundle\Form;

use Laviva\BackOfficeBundle\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class productType extends AbstractType
{
    /**
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', null, array('label' => 'name.', 'translation_domain' => 'FOSUserBundle','attr'=>array('class'=>'form-control')))
                ->add('description', null, array('label' => 'description.', 'translation_domain' => 'FOSUserBundle','attr'=>array('class'=>'form-control')))
                ->add('image', FileType::class, ['label' => 'image (JPG/JPEG/PNG file)'])
                ->add('color', null, array('label' => 'color.', 'translation_domain' => 'FOSUserBundle','attr'=>array('class'=>'form-control')))
                ->add('price', null, array('label' => 'price.', 'translation_domain' => 'FOSUserBundle','attr'=>array('class'=>'form-control')))
                ->add('quantity', null, array('label' => 'quantity.', 'translation_domain' => 'FOSUserBundle','attr'=>array('class'=>'form-control')));
    }
    
    /**
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Laviva\BackOfficeBundle\Entity\product',
        ));
    }

    /**
     */
    public function getBlockPrefix()
    {
        return 'laviva_backofficebundle_product';
    }
}