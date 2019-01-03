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
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
                ->add('description')
                ->add('photo', FileType::class, array('label' => 'photo (JPG/JPEG/PNG file)'))
                ->add('color')
                ->add('price')
                ->add('quantity');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Laviva\BackOfficeBundle\Entity\product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'laviva_backofficebundle_product';
    }


}
