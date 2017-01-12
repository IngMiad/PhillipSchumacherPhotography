<?
namespace Application\Navigation\Service;

use Zend\Navigation\Service\DefaultNavigationFactory;

class CategoryNavigationFactory extends DefaultNavigationFactory
{
    protected function getName()
    {
        return 'category';
    }
}