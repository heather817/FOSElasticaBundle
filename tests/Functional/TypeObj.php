<?php

/*
 * This file is part of the FOSElasticaBundle package.
 *
 * (c) FriendsOfSymfony <https://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\ElasticaBundle\Tests\Functional;

class TypeObj
{
    public $id = 5;
    public $coll;
    public $field1;
    public $field2;

    public function isIndexable()
    {
        return true;
    }

    public function isntIndexable()
    {
        return false;
    }
}
