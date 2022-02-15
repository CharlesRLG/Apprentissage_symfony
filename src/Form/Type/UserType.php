<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('firstname', TextType::class, ['label' => 'Prénom'])
->add('lastname', TextType::class, ['label' => 'Nom'])
->add('birthday', DateType::class, [
'label' => 'Né(e) le',
'attr' => ['placeholder' => 'dd/mm/yyyy'],
'widget' => 'single_text',
'format' => 'dd/MM/yyyy',
'input' => 'datetime',
'html5' => false
])
->add('save', SubmitType::class)
->getForm();
}
}