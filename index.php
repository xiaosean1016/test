<?php
require ('./functions.php');
//$arr = ['a','b'];  $num = 3;

// 'aaa','aab','aba','abb','baa','bab','bba','bbb'


//$arr = [['a'=>2],['a'=>1],['a'=>3]];
//print_r(array_column($arr,'a'));
//$new = array_multisort(array_column($arr,'a'),SORT_ASC,$arr);


$str = '.fa-glass:before {
  content: "\f000";
}';

$pattern = '/.fa-([a-z]*):before/';
preg_match_all($pattern, $str, $match);

$li_str = '';

list($arr1, $arr2) = $match;
foreach ($arr2 as $val) {
    echo htmlspecialchars("<li><span class=\"fa fa-{$val} dog-arrow\" aria-hidden=\"true\"></span>
								<p>{$val} </p>
							</li>") . '<br>';
}
