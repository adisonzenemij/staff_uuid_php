<?php
    # Directorio Proyecto
    define('DIRSTORAGE', __DIR__);
    echo "Directorio:" . " " . DIRSTORAGE . '<br/>';
    require DIRSTORAGE . '/vendor/autoload.php';

    # Importar la clase de utilidades
    use App\Utils\IdentifiedUtil;

    # Llamar al método para generar un UUID
    $uuidTrigger = IdentifiedUtil::trigger() . "<br/>";

    # Imprimir el UUID generado
    echo "UUID:" . " " . $uuidTrigger;

    # Llamar al método para generar un UUID
    $uuidShort = IdentifiedUtil::short(25, 5);

    # Imprimir el UUID generado
    echo "UUID:" . " " . $uuidShort . "<br/>";
    