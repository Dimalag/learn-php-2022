<?php
include("Student.php");
include("StudentIdHtmlOption.php");
include("Database.php");
include("fpdf.php");

use Coursework\StudentIdHtmlOption;
use Coursework\Database;

$database = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    processPost();
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    processGet();
}

function processGet()
{
    global $database;
    $studentIds = $database->getStudentIds();
    $studentIdsElements = [];
    foreach ($studentIds as $studentId) {
        $studentIdElement = new StudentIdHtmlOption($studentId);
        $studentIdsElements[] = $studentIdElement;
    }

    $responseDoc = prepareResponseDocument($studentIdsElements);
    echo $responseDoc;
}

function prepareResponseDocument($studentIdsElements): string
{
    $htmlResponseTemplate = file_get_contents("select_student.html");
    $optionElements = "";
    foreach ($studentIdsElements as $element) {
        $optionElements .= $element . PHP_EOL;
    }

    return str_replace("\${STUDENTS_OPTIONS}", $optionElements, $htmlResponseTemplate);
}

function processPost()
{
    global $database;
    $studentId = $_POST['studentId'];
    $student = $database->getStudentById($studentId);
    sendPdf($student);
}

function sendPdf($student): void
{
    $data = "Данные студента: $student->name, $student->surname";

    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, $data, 1);
    $pdf->Output("D", "ABC.pdf", true);
}
