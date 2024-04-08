<?php

declare(strict_types=1);

class EncryptionTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $data = 'this is my first composer package';
        $key = '1234567abcedfg1234567890';

        /* 加密 */
        $encrypt = \Wjl\Hello\Encryption::encrypt($data, $key);
        self::assertIsString($encrypt);

        /* 解密 */
        $decrypt = \Wjl\Hello\Encryption::decrypt($encrypt, $key);

        //判断解密明文是否和预期的一致
        self::assertEquals($decrypt, $data);
    }

}