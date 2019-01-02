<?php

namespace QueryBuilder\Mysql;

class SelectTest extends \PHPUnit\Framework\TestCase
{
    public function testSelectSemFiltro()
    {
        $select = new Select;
        $select->table('users');

        $actual = $select->getSql();
        $expected = 'SELECT * FROM users';

        $this->assertEquals($expected, $actual);
        
    }

    public function testSelectEspecificandoOsCampos()
    {
        $select = new Select;
        $select->table('users');
        $select->fields(['name', 'email']);

        $actual = $select->getSql();
        $expected = 'SELECT name, email FROM users';

        $this->assertEquals($expected, $actual);
    }
}