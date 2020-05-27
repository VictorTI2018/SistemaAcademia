<?php



require __DIR__ . '/../../bootstrap/app.php';

use App\Core\Template\Layout;

$layout = new Layout();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'criar_mod':
            require __DIR__ . '/../../app/Controllers/modalidade/ajax/register.php';
            break;
        case 'remover_mod':
            require __DIR__ . '/../../app/Controllers/modalidade/ajax/remover.php';
            break;
    }
} else {
    header('Location:/modalidades');
}
