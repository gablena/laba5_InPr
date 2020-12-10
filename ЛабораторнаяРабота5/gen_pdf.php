<?php
  require('tfpdf/tfpdf.php');
//соединение с БД
$mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
//конец блока соединения с БД
   //if (!$mysqli->connect_errno) {
       echo "OKoK";
        $result = $mysqli->query("SELECT
                 OS1.name as OS_name,
                 OS1.type as OS_type,
                 OS1.digCap as OS_digCap,
                 OS1.programmer as OS_programmer,
                 OS1.users as OS_users,
                 DK.keyOS,
                 DK.dataP,
                 DK.dataO,
                 DS.url as DS_url
                 FROM DK
                 LEFT JOIN OS1 ON DK.id_OS=OS1.id_OS
                 LEFT JOIN DS ON DK.id_DS=DS.id_DS"
        );
    //s}

    $pdf = new tFPDF();
    $pdf->AddFont('PDFFont','','times.ttf');
    $pdf->SetFont('PDFFont','',12);
    $pdf->AddPage();

    $pdf->Cell(50);
    $pdf->Cell(80,10,'Операционные системы',1,0,'C');
    $pdf->Ln(20);

    $pdf->SetFillColor(200,200,200);
    $pdf->SetFontSize(6);

    $header = array("п/п","Название","Тип оборудования","Разрядность","Разработчик","Пользователи","Ключ","Дата приобретения","Дата окончания","URL магазина");
    $w = array(6,23,25,15,25,20,20,20,18,23);
    $h = 10;
    for ($c = 0; $c < 10; $c++){
        $pdf->Cell($w[$c],$h,$header[$c],'LRTB','0','',true);
    }
    $pdf->Ln();

    if ($result){
        $counter = 1;
        while ($row = $result->fetch_row()){
            $pdf->Cell($w[0],$h,$counter,'LRBT','0','C',true);
            $pdf->Cell($w[1],$h,$row[0],'LRB');

            for ($c = 2; $c < 10; $c++){
                if ($c==7 || $c==8){
                    $row[$c-1] = date('d-m-Y', strtotime($row[$c-1]));
                }
                $pdf->Cell($w[$c],$h,$row[$c-1],'RB');
            }
            $pdf->Ln();
            $counter++;
        }
    }

    $pdf->Output("I",'OS.pdf',true);