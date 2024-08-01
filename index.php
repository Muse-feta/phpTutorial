<?
 print "Hello World";
 $name = "Abebe";
 echo $name;

 // concatenation
 echo "My name is " . $name;

 $a = 10;
 $b = 20;
 echo ($a <= $b);

 // array
 $arr = array(1, 2, 3, 4, 5);
 echo $arr[0];
 print "<pre>";
 print_r($arr);

 $arr2 = ['name' => 'Abebe', 'age' => 20];
 echo $arr2['name'];

 $count = count($arr);
 echo $count;

 function selamta() {
    echo "endet nachu";
 }

 selamta();

 function add($a, $b) {
    $c = $a + $b;
    return $c;
 };

 function average($a, $b) {
    $c = add($a, $b) / 2;
    echo $c;
 }
 average(10, 20);

 // conditional statementt
 $pass = 50;
 $score = 49;
 if($pass > $score) {
    echo "pass";
 }

 // loop
 $arr = array(1, 2, 3, 4, 5);
 for($i = 0; $i < count($arr); $i++) {
    echo $arr[$i]. "<br>";
 }
?>