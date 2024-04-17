<?php
// Include the Dompdf autoload file
require_once '../vendor/autoload.php';

// Use the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

if(isset($_POST['generate_pdf'])) {
    // Get user's input from the form
    $header = isset($_POST['header']) ? $_POST['header'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $footer = isset($_POST['footer']) ? $_POST['footer'] : '';
    $font = isset($_POST['font']) ? $_POST['font'] : 'Arial, sans-serif';

    // Create options instance
    $options = new Options();
    $options->set('isFontSubsettingEnabled', true); // Enable font subsetting

    // Create a new Dompdf instance with options
    $dompdf = new Dompdf($options);

    // Load font
    $dompdf->getFontMetrics()->get_font('Arial, sans-serif');

    // Dynamically generate HTML content with user's input and selected font style
    $html = '<html><head><style>body { font-family: ' . $font . '; }</style></head><body>';
    $html .= '<h1>' . $header . '</h1>';
    $html .= '<p>' . $content . '</p>';
    $html .= '<footer>' . $footer . '</footer>';
    $html .= '</body></html>';

    // Load HTML content into Dompdf
    $dompdf->loadHtml($html);

    // Set PDF rendering options (optional)
    $dompdf->setPaper('A4', 'portrait');

    // Render PDF (convert HTML to PDF)
    $dompdf->render();

    // Output PDF to browser for download
    $dompdf->stream('user_generated_pdf_document.pdf', array('Attachment' => 0));
}
?>
