<?php

$images = scandir("images"); //retorna um array

//var_dump($images); //visualiza imagens em formato array

foreach ($images as $img)
{
    if (!in_array($img, array(".", "..")))
    {
        $filename = "images" . DIRECTIRY_SEPARATOR . $img;

        $info = pathinfo($filename);

        var_dump($info);
    }
}



?>