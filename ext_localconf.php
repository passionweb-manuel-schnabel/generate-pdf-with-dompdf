<?php

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'GeneratePdfWithDompdf',
    'ExamplePdf',
    [
        \Passionweb\GeneratePdfWithDompdf\Controller\PdfController::class => 'generatePdf'
    ],
    // non-cacheable actions
    [
        \Passionweb\GeneratePdfWithDompdf\Controller\PdfController::class => 'generatePdf',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        examplepdf {
                            iconIdentifier = plugin-examplepdf
                            title = LLL:EXT:generate_pdf_with_dompdf/Resources/Private/Language/locallang_db.xlf:plugin_generate_pdf_with_dompdf.name
                            description = LLL:EXT:generate_pdf_with_dompdf/Resources/Private/Language/locallang_db.xlf:plugin_generate_pdf_with_dompdf.description
                            tt_content_defValues {
                                CType = list
                                list_type = generatepdfwithdompdf_examplepdf
                            }
                        }
                    }
                    show = *
                }
           }'
);
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

$iconRegistry->registerIcon(
    'plugin-examplepdf',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:generate_pdf_with_dompdf/Resources/Public/Icons/Extension.png']
);
