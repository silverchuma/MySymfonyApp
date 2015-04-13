<?php

namespace SoftBooksBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BooksType extends AbstractType
{

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SoftBooksBundle\Entity\Books'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'softbooksbundle_books';
    }
}
