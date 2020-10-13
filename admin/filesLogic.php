<?php
// connect to the database
include('../db_connection.php');

$sql = "SELECT * FROM upload_pdf_file";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// uploadfiles files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploadfiles/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploadfiles directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    }
    //  elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
    //     echo "File too large!";
    // }
     else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
           $sql = "INSERT INTO upload_pdf_file (name, size, downloads, uploaded_on) VALUES ('$filename', $size, 0, NOW())";
            if (mysqli_query($conn, $sql)) {
                $msg = '<div class="alert alert-success mt-2">File Uploaded successfully </div>';
            }
        } else {
            $msg = '<div class="alert alert-danger mt-2">File size to large</div>';
        }
    }
}

?>

<?PHP


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM upload_pdf_file WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploadfiles/' . $file['name'];

//     if (file_exists($filepath)) {
//   /*
//         header('Content-Description: File Transfer');
//         header('Content-Type: application/octet-stream');
//         header('Content-Disposition: attachment; filename=' . basename($filepath));
//         header('Expires: 0');
//         header('Cache-Control: must-revalidate');
//         header('Pragma: public');
//         header('Content-Length: ' . filesize('uploadfiles/' . $file['name']));
//         readfile('uploadfiles/' . $file['name']);
// */
//         header('Content-type: application/pdf');
//         header('Content-Disposition: inline; filename=' . basename($filepath) );
//         header('Content-Transfer-Encoding: binary');

//      /*   // Now update downloads count
//         $newCount = $file['downloads'] + 1;
//         $updateQuery = "UPDATE upload_pdf_file SET downloads=$newCount WHERE id=$id";
//         mysqli_query($conn, $updateQuery);
//         */
//         exit;

//     }

}
?>