<?php
echo substr("Texto de ejemplo",9,4);


echo substr("Texto de ejemplo",-5,3);

echo substr("Texto de ejemplo",6);
echo substr("Texto de ejemplo",-6);

echo substr("Texto de ejemplo", 0, -1);


//Casos que retornan false o null
echo substr("Texto de ejemplo", 10, -10); //longitud mas grande que los caracteres disponibles despues del truncamiento

echo substr("Texto de ejemplo", 2, 0);

echo substr("Texto de ejemplo", 16);
?>