<?php

namespace App\Form;

use App\Entity\Commandes;
use App\Form\EventListener\ClearCartListener;
use App\Form\EventListener\RemoveCartItemListener;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            /*->add('etat')
            ->add('dateDeCommande')

            ->add('idProduit')*/

            /*->add('idUtilisateur')
            ->add('idUtilisateur1')*/

            ->add('items', CollectionType::class, [
                'entry_type' => CartItemType::class
            ])
            ->add('enregistrer', SubmitType::class)
            ->add('vider', SubmitType::class);


        $builder->addEventSubscriber(new RemoveCartItemListener());
        $builder->addEventSubscriber(new ClearCartListener());
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commandes::class,
        ]);
    }
}
