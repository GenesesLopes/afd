<?php

namespace Convenia\AfdReader\Tests;

use Convenia\AfdReader\AfdReader;
use PHPUnit_Framework_TestCase;

/**
 * Class AfdReaderTest.
 */
class AfdReaderTest extends PHPUnit_Framework_TestCase
{
    public function test_afdt_get()
    {
        $return = new AfdReader('tests/afdt_1_test.txt');
        $val = $return->getByUser();
        $this->assertArrayHasKey('20763990692', $val);
    }

    public function test_afdt_all()
    {
        $return = new AfdReader('tests/afdt_1_test.txt');
        $val = $return->getAll();
        $this->assertArrayHasKey('header', $val);
        $this->assertArrayHasKey('detail', $val);
    }

    public function test_afd_get()
    {
        $return = new AfdReader('tests/afd_test.txt');
        $val = $return->getByUser();
        $this->assertArrayHasKey('16838599008', $val);
    }

    public function test_afd_all()
    {
        $return = new AfdReader('tests/afd_test.txt');
        $val = $return->getAll();
        $this->assertArrayHasKey('header', $val);
        $this->assertArrayHasKey('markAdjust', $val);
        $this->assertArrayHasKey('companyChange', $val);
        $this->assertArrayHasKey('mark', $val);
        $this->assertArrayHasKey('employee', $val);
    }

    public function test_acjef_get()
    {
        $return = new AfdReader('tests/acjef_2_test.txt');
        $val = $return->getByUser();
        $this->assertArrayHasKey('20763990692', $val);
    }

    public function test_acjef_all()
    {
        $return = new AfdReader('tests/acjef_2_test.txt');
        $val = $return->getAll();
        $this->assertArrayHasKey('header', $val);
        $this->assertArrayHasKey('contractualHours', $val);
        $this->assertArrayHasKey('detail', $val);
    }
}
