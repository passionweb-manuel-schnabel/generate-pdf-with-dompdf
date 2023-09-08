<?php

declare(strict_types=1);

namespace Passionweb\GeneratePdfWithDompdf\Controller;

use Passionweb\GeneratePdfWithDompdf\Service\PdfService;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class PdfController extends ActionController
{
    protected $pdfService;

    public function __construct(PdfService $pdfService)
    {
        $this->pdfService = $pdfService;
    }

    public function generatePdfAction(): ResponseInterface
    {
        $pdfFilePath = $this->pdfService->generatePdf();

        $this->view->assign('pdfFilePath', $pdfFilePath);

        return $this->htmlResponse();
    }
}
