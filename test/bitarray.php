<?php

require( __DIR__ . "/../lib/SpectrumLib/BitArray.php" );


// Test 1
echo "\n--- Test 1: Instalize BitArray with a default size ---.\n\n";
// $bitarray = new BitArray( 0 ); // error
// $bitarray = new BitArray( -1 ); // error
// $bitarray = new BitArray( 'z' ); // error
$size = 31;
$bitarray = new BitArray( $size ); // error
echo "Entered an array size of $size and got " . count( $bitarray ) . " bit( s ).\n";
echo $bitarray->numberOfIntergersUsed() . " " . PHP_INT_SIZE * 8 ."bit ints(s) were used.\n";
$size = 100000;
$bitarray = new BitArray( $size ); // error
echo "Entered an array size of $size and got " . count( $bitarray ) . " bit( s ).\n";
echo $bitarray->numberOfIntergersUsed() . " " . PHP_INT_SIZE * 8 ."bit ints(s) were used.\n";
$size = 9999999;
$bitarray = new BitArray( $size ); // error
echo "Entered an array size of $size and got " . count( $bitarray ) . " bit( s ).\n";
echo $bitarray->numberOfIntergersUsed() . " " . PHP_INT_SIZE * 8 ."bit ints(s) were used.\n";
$size = 64;
$bitarray = new BitArray( $size ); // error
echo "Entered an array size of $size and got " . count( $bitarray ) . " bit( s ).\n";
echo $bitarray->numberOfIntergersUsed() . " " . PHP_INT_SIZE * 8 ."bit ints(s) were used.\n";


// Test 2
echo "\n--- Test 2: Instalize BitArray with array of 0s and 1s ---.\n\n";
// $bitarray = new BitArray( [ 2 , 255 ] ); // error
// $bitarray = new BitArray( [ -1 , 0 ] ); // error
$bitarray = new BitArray( [ 1 ] );
echo "1. BitArray consists of " . $bitarray->toBinaryRepersentaion() . ".\n";
$bitarray = new BitArray( [ 0 ] );
echo "2. BitArray consists of " . $bitarray->toBinaryRepersentaion() . ".\n";
$bitarray = new BitArray( [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1 ] );
echo "3. BitArray consists of " . $bitarray->toBinaryRepersentaion() . ".\n";
$bitarray = new BitArray( [ 0, 1, 0, 1, 0, 1, 0,  1, 0, 1, 0, 1, 0, 1 ] );
echo "4. BitArray consists of " . $bitarray->toBinaryRepersentaion() . ".\n";


// Test 3
echo "\n--- Test 3: After instalization of BitArray flip bits on and off ---.\n\n";
$bitarray = new BitArray( 64 );
// $bitarray[ 65 ]; // error
echo "1. turning bit on index 0 on \n";
$bitarray[ 0 ] = true;
echo "got " . $bitarray->toBinaryRepersentaion()  . ".\n";
echo "2. turning bit on index 1 on \n";
$bitarray[ 1 ] = 1;
echo "got " . $bitarray->toBinaryRepersentaion()  . ".\n";
echo "3. turning bit on index 0 off \n";
$bitarray[ 0 ] = false;
echo "got " . $bitarray->toBinaryRepersentaion()  . ".\n";

// Test 4
echo "\n--- Test 4: Populate array of set size using binary string ---.\n\n";

$bitarray = new BitArray( 15 );
echo "1. binary string of (255, 2) results in \n";
$bitarray->assignBinaryString( pack( "C*", 255, 2 ) );
// $bitarray->assignBinaryString( pack( "C*", 255, 1 ) ); // error on bit in padding
echo "got " . $bitarray->toBinaryRepersentaion()  . ".\n";
$bitarray = new BitArray( 8 );
echo "2. binary string of (128) results in \n";
$bitarray->assignBinaryString( pack( "C*", 128 ) );
echo "got " . $bitarray->toBinaryRepersentaion()  . ".\n";
// $bitarray->assignBinaryString( pack( "C*", 255, 0 ) ); // error to many characters
$bitarray = new BitArray( 56 );
echo "1. binary string of (100,16,98,1,0,78) results in \n";
$bitarray->assignBinaryString( pack( "C*", 100, 16, 98, 1, 0, 78 ) );
echo "got " . $bitarray->toBinaryRepersentaion()  . ".\n";







