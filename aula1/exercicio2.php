<?php

$car1 = array('modelo' => 'hb20', 'marca' => 'hyundai', 'link' => 'https://fotos-jornaldocarro-estadao.nyc3.cdn.digitaloceanspaces.com/wp-content/uploads/2022/08/05132152/NOVO-HB20-2-scaled.jpg');
$car2 = array('modelo' => 'celta', 'marca' => 'chevrolet', 'link' => 'https://www.agoramotors.com.br/wp-content/uploads/2022/08/chevrolet-celta-em-2023-frente.jpg');
$car3 = array('modelo' => 'monza', 'marca' => 'chevrolet', 'link' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjO35F5bdGah0UF7mfpaaD5yPfDo7Mn5tNvBKRrAN4Axz9CTfMv7LTiq2TJ6zopdJxpX8PisaoEUqcnkf04p1w766GA7QySPEm7VLN3ne47s1i4D6__Kvm4HR2zEx87g2nny9N0dxjGSuk/s640-rw/Chevrolet-Monza-fase-ii.jpg');
$car4 = array('modelo' => 'kwid', 'marca' => 'renault', 'link' => 'https://cdn.motor1.com/images/mgl/9mZAeX/s1/renault-kwid-zen-2023.jpg');
$car5 = array('modelo' => 'uno', 'marca' => 'fiat', 'link' => 'https://s2-autoesporte.glbimg.com/HYjydU2o-1Hqk3jg4DRdAVcyl9A=/0x246:1980x1452/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2024/6/f/CuXZRKTny92pBpjfQDdA/1984-001.jpg');

$carros = array($car1,$car2,$car3,$car4,$car5);

foreach ($carros as $car) 
{
    print "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>
            " . $car['modelo'] . " <br>
            ". $car['marca'] ."<br>
            <img style='width: 100%; height: auto;' src='". $car['link'] ."' /><br>
        </div>";
}