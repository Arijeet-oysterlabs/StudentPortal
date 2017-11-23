<?php
/**
 * Created by PhpStorm.
 * User: webonise
 * Date: 23/11/17
 * Time: 1:18 PM
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper){
        $formMapper
            ->add('username', 'text')
            ->add('email')
            ->add('enabled', 'checkbox')
            ->add('prn', 'integer', [ 'label' => 'PRN' ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper){
        $datagridMapper
            ->add('username')
            ->add('email')
        ;
    }

    protected function configureListFields(ListMapper $listMapper){
        $listMapper
            ->addIdentifier('id')
            ->add('username')
            ->add('email')
        ;
    }
}
