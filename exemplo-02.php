<?php

$images = scandir("images"); //retorna um array

$data = array();

//var_dump($images); //visualiza imagens em formato array

foreach ($images as $img)
{
    if (!in_array($img, array(".", "..")))
    {
        $filename = "images" . DIRECTIRY_SEPARATOR . $img;

        $info = pathinfo($filename);

        $info["size"] = filesize($filename);

        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

        $info["url"] = "http://localhost/php_estudos/curso_hcode/dir/".$filename;

        array_push($data, $info);
    }
}

echo json_encode($data);

?>