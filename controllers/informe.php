<?php
class Informe extends controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function pdfProyectos()
    {

        if (!empty($_POST)) { // aca se va a capturar el estado para enviarlo al modelo
            $estado = $_POST['sEstado'];

            $pdf = new TCPDF();
            //ENCABEZADO
            $pdf->setHeaderMargin(15);
            $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Reporte #1", "Acotecimientos");
            //contenido
            $pdf->setMargins(20, 45, 20);
            $acontecimientos = $this->getModel()->acontecimiento($estado);
            //print_r($acontecimientos);
            //die();
            $contenido = '<table border="1">
            <tr style="background-color:green; color:white;">
                <td>Tipo</td>
                <td>Estado</td>
                <td>acontecimiento</td>
            </tr>';

            foreach ($acontecimientos as $value) {
                $contenido .= '<tr>
                <td>' . $value['tipo'] . '</td>
                <td>' . $value['acontecimiento'] . '</td>
                <td>' . $value['estado'] . '</td>
                
            </tr>';
                // Ya está, solo crea la tabla
                //ok muchas gracias ok
            }
            $contenido .= '</table>';
            $pdf->addPage();
            $pdf->writeHtml($contenido);
            ob_end_clean();
            $pdf->outPut("reporteEventos.pdf");
        } else {
            // Se devuelven los estados a la vista
            $this->getView()->estados = $this->getModel()->getEstados();
            $this->getView()->title = "Informe 1 | APP";
            $pagina = 'informe/pdfproyectos';
            $this->getView()->loadView($pagina);
        }
    }
}
