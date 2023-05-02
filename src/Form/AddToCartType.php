<?php

namespace App\Form;

use App\Entity\LigneCommande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AddToCartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantite')
           /* ->add('prixHT')
            ->add('prixTTC')
            ->add('tva')
            ->add('idProduit')
            ->add('idCommandes')*/
            ->add('add', SubmitType::class, [
                'label' => 'Ajouter au panier'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LigneCommande::class,
        ]);
    }
}
