<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            SlugField::new('slug')->setTargetFieldName('title'),
            TextField::new('shortDescription'),
            TextEditorField::new('description'),
            TextField::new('brand'),
            TextField::new('link'),
            MoneyField::new('price')->setCurrency('EUR'),
            BooleanField::new('isBest'),
            ImageField::new('illustration')->setBasePath('uploads/')
                ->setUploadDir('public/uploads/')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            AssociationField::new('category'),
            AssociationField::new('gender')
            // CollectionField::new('category') 
            // Permet de faire plusieurs catégories pour un produit
        ];
    }
    
}
