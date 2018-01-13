<?php
echo "conectando vilaemporio oracle...\n";

$conn = oci_connect('SANKHYA', 'tecsis', '177.137.238.180:8580/ORCL');
if ($conn) {
    // Prepare the statement
    echo "executando select...\n";
    $stid = oci_parse($conn, 'SELECT * FROM TGFPRO WHERE ROWNUM <= 10');
    if (!$stid) {
        $e = oci_error($conn);
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    // Perform the logic of the query
    $r = oci_execute($stid);
    if (!$r) {
        $e = oci_error($stid);
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    // Fetch the results of the query
    while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
        //print_r($row);
        $row = (object) $row;
        echo "{$row->CODPROD}\n";
    }

    oci_free_statement($stid);
    oci_close($conn);
}

?>