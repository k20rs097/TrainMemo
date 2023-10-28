<?php
namespace functions;

use PDOException;

function connectDb() {
    try {

    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

?>