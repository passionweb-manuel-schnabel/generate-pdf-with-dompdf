<?php

namespace Passionweb\GeneratePdfWithDompdf\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use TYPO3\CMS\Core\Core\Environment;

class PdfService
{
    public function generatePdf(): string
    {
        $options = new Options();
        $options->set('defaultFont', 'Courier');

        $dompdf = new Dompdf($options);
        $pdfContent = '
<html>
  <head>
    <style>body {color: #104252;}</style>
  </head>
  <body>
    <h1>I am the content of the pdf file</h1>
    <p>Add your custom content.</p>
  </body>
</html>
';
        $dompdf->loadHtml($pdfContent);
        $dompdf->setPaper('A4');
        $dompdf->render();
        $pdf = $dompdf->output();

        $relativePath = '/fileadmin/user_upload/examplepdf_'.time().'.pdf';
        $pdfFilePath = Environment::getPublicPath().$relativePath;
        file_put_contents($pdfFilePath, $pdf);

        return $relativePath;
    }
}
