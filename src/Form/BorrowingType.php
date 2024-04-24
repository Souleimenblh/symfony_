<?php

namespace App\Form;

use App\Entity\Borrowing;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
//use Symfony\Component\Form\Extention\Core\Type\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class BorrowingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateBorrowed', DateTimeType::class, [
                'widget' => 'single_text',
                //'html5' => false,
                'attr' => ['class' => 'form-control mb-3 col-xs-4'], 
                //'date_format' => 'dd-MM-yyyy',
            ])

            ->add('bookReturned')
            ->add('student')
            ->add('book')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Borrowing::class,
        ]);
    }
}
