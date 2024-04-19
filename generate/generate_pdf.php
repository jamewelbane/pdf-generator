<?php
require_once '../vendor/autoload.php';

//Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

if(isset($_POST['generate_pdf'])) {
    $header = isset($_POST['header']) ? $_POST['header'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $footer = isset($_POST['footer']) ? $_POST['footer'] : '';
    $font = isset($_POST['font']) ? $_POST['font'] : 'Arial, sans-serif';

    
    $options = new Options();
    $options->set('isFontSubsettingEnabled', true); // Enable font subsetting

    $dompdf = new Dompdf($options);

   
    $dompdf->getFontMetrics()->get_font('Arial, sans-serif');

    // Dynamically generate
    $html = '<html><head><style>body { font-family: ' . $font . '; }</style></head><body>';
    $html .= '<h1>' . $header . '</h1>';
    $html .= '<p>' . $content . '</p>';
    $html .= '<footer>' . $footer . '</footer>';
    $html .= '</body></html>';

   
    $dompdf->loadHtml($html);

   
    $dompdf->setPaper('A4', 'portrait');

 
    $dompdf->render();

    // Output PDF 
    $dompdf->stream('user_generated_pdf_document.pdf', array('Attachment' => 0));
}
?>
