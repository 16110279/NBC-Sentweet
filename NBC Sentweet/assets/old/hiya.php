<?php

function getpositif()
{
    include 'koneksi.php';
    $query = mysqli_query($koneksi,"select * from `data_train` where sentimen='P'");
    while ($rowd =  mysqli_fetch_array($query))
    {
        $array[]= $rowd['tweet_preprocessing'];
        $value = implode(" ",$array);
    }
    return $value;
}

function a()
{
    include 'koneksi.php';
    $query = mysqli_query($koneksi,"SELECT * FROM `data_training_kata` ORDER BY `nama_kata` ASC");
    while ($rowd =  mysqli_fetch_array($query))
    {
        $array[]= $rowd['nama_kata'];
        $value = implode(" ",$array);
    }
    $value = explode(" ",$value);
    return $value;
}


$anu = a();
//$text = "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>";
$text = getpositif();
echo $text . '<br/>';
echo "<br>";

foreach($anu as $count_word)
{
echo $count_word . ' | tampil di kategori positif sebanyak ' . substr_count(strtolower($text), $count_word). " kali <br>";
}
?>