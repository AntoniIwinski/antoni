<?php
//bolean
$b1 = true;
$b2 = false;

//typ integer
$i1 = 2137; //decimal
$i2 = 0x45; //hex
$i3 = 0420; //octal
$i4 = 0b1000101; //binary

//typ float
$f1 = 69.420;

//typ string
$s1 = 'Sample 1';
$s2 = "Sample 2 $i1";

//heredoc
$s3 = <<<SIUSIAK
    fdsfsdfsdfsdfsdfsdfsd]
    fdsfsdfsfsdfsdtr]]/
SIUSIAK;

//nowdoc
$s4 = <<<'ESSA'
    fdsfsdfsdfsdfsdfvcvcxvx
    vxcvcxvxvxcvxcvxc
ESSA;

echo "esdvsdvcxfse";

echo "<br />";

echo $s1;

//typy tablicowe
$arr = ['dsfdsfvfs',12235,3.145];

//tablica asocjacyjna
$asoc = [
    'k1' => 82525,
    'q2' => 'fsdfsdkfsdfdslfs',
    5 => 3.6895
];

//tablica tablic
$arrOfArr = [
    ['12',23456,3.134],
    ['sdfsd','dsfdsgdfs','asdcvxcxz']
];

//typ obiektowy
$o1 = new stdClass();
$o1->attr = 694202137;

//funkcje
function f1(){
    echo "Hello world";
}

f1();

function f2(): void {
    echo "Hello World!";
}

f2();

function f3($a1, $a2){
    echo $a1 + $a2;
}

function f4(int $a1, int $a2):void 
{
    echo $a1 + $a2;
}

function f5(string $a): string {
    return $a . 'by f5()';
}
