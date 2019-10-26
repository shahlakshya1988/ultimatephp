<?php
/**
 * & and
 * | or
 * ^ xor
 * ~ not works on single operand
 * - unary operator
 */
/**
 * HOW BITS WORK
 * 0 BITS 0000
 * 1 BITS 0001
 * 2 BITS 0010
 * 3 BITS 0011
 * 4 BITS 0100
 * 5 BITS 0101
 */
/**
 * AND
 * 1 - 1 1
 * 1 - 0 0
 * 0 - 1 0
 * 0 - 0 0
 */
/**
 * OR
 * 1 - 1 1
 * 1 - 0 1
 * 0 - 1 1
 * 0 - 0 0
 */
/**
 * XOR
 * 1 - 1 0
 * 1 - 0 1
 * 0 - 1 1
 * 0 - 0 0
 */
echo "0 : ".decbin(0).PHP_EOL;
echo "1 : ".decbin(1).PHP_EOL;
echo "2 : ".decbin(2).PHP_EOL;
echo "3 : ".decbin(3).PHP_EOL;
echo "4 : ".decbin(4).PHP_EOL;
echo "5 : ".decbin(5).PHP_EOL;
echo "6 : ".decbin(6).PHP_EOL;

$firstnumber = 5;
$secondnumber = 6;
echo $firstnumber & $secondnumber.PHP_EOL;