<?php
namespace App\Controllers;

use Core\BaseController;

class ErrorController extends BaseController
{
    public function notFound(): void
    {
        http_response_code(404);
        $this->render('error/404', ['message' => $this->getErrorMessage(404)]);
    }

    public function getErrorMessage(int $code): string
    {
        $messages = [
            404 => 'Page non trouvée',
            // Ajoutez d\'autres codes d\'erreur et messages si nécessaire
        ];

        return $messages[$code] ?? 'Erreur inconnue';
    }
}
