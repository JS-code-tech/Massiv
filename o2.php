<?php



class bot {
    public $name;

}

$bot2 = new bot ;

$bot2 -> name = "Code New";

echo $bot2 -> name;



$box = ['JavaScript', 'Java', 'PHP', '.NET', 'C#'];


echo "<pre>";



if ($search = array_search('C#', $box)) {
    echo "Topildi bu $search" . "-index" ;
}
else {
    echo "Topilmadi $search";
}