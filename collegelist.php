<html>
<head><title>Oracle Database Connection Demo</title></head>
<body>
<?php
$conn = oci_connect("sainath", "siva123#", "oracle.cise.ufl.edu:1521/orcl");

If (!$conn)
    echo 'Failed to connect to Oracle';
else {
    echo 'Succesfully connected with Oracle DB';
    echo '<br/>';
    echo '<br/>';
    echo "Input Parameters :";
    echo '<br/>';

    if (isset($_GET['name'])) {
        $name = $_GET['name'];
    }

    if (isset($_GET['zip'])) {
        $zip = $_GET['zip'];
    }

    if (isset($_GET['major'])) {
        $major = $_GET['major'];
    }


    if (isset($_GET['size'])) {
        $size = array();
        $entirestring = $_SERVER['QUERY_STRING'];

        if (strpos($entirestring, 'small') !== false && strpos($entirestring, 'medium') !== true && strpos($entirestring, 'large') !== true) {
            $size[0] = 'small';
        } elseif (strpos($entirestring, 'small') !== false && strpos($entirestring, 'medium') !== false && strpos($entirestring, 'large') !== true) {
            $size[0] = 'small';
            $size[1] = 'medium';
        } elseif (strpos($entirestring, 'small') !== false && strpos($entirestring, 'medium') !== false && strpos($entirestring, 'large') !== false) {
            $size[0] = 'small';
            $size[1] = 'medium';
            $size[2] = 'large';
        } elseif (strpos($entirestring, 'small') !== true && strpos($entirestring, 'medium') !== false && strpos($entirestring, 'large') !== true) {
            $size[0] = 'medium';
        } elseif (strpos($entirestring, 'small') !== true && strpos($entirestring, 'medium') !== false && strpos($entirestring, 'large') !== false) {
            $size[0] = 'medium';
            $size[1] = 'large';
        } elseif (strpos($entirestring, 'small') !== true && strpos($entirestring, 'medium') !== true && strpos($entirestring, 'large') !== false) {
            $size[0] = 'large';
        } elseif (strpos($entirestring, 'small') !== false && strpos($entirestring, 'medium') !== true && strpos($entirestring, 'large') !== false) {
            $size[0] = 'small';
            $size[1] = 'large';
        }
    }


    if (isset($_GET['control'])) {
        $control = array();
        $entirestring = $_SERVER['QUERY_STRING'];

        if (strpos($entirestring, 'public') !== false && strpos($entirestring, 'private') !== true && strpos($entirestring, 'profit') !== true) {
            $control[0] = 'public';
        } elseif (strpos($entirestring, 'public') !== false && strpos($entirestring, 'private') !== false && strpos($entirestring, 'profit') !== true) {
            $control[0] = 'public';
            $control[1] = 'private';
        } elseif (strpos($entirestring, 'public') !== false && strpos($entirestring, 'private') !== false && strpos($entirestring, 'profit') !== false) {
            $control[0] = 'public';
            $control[1] = 'private';
            $control[2] = 'profit';
        } elseif (strpos($entirestring, 'public') !== true && strpos($entirestring, 'private') !== false && strpos($entirestring, 'profit') !== true) {
            $control[0] = 'private';
        } elseif (strpos($entirestring, 'public') !== true && strpos($entirestring, 'private') !== false && strpos($entirestring, 'profit') !== false) {
            $control[0] = 'private';
            $control[1] = 'profit';
        } elseif (strpos($entirestring, 'public') !== true && strpos($entirestring, 'private') !== true && strpos($entirestring, 'profit') !== false) {
            $control[0] = 'profit';
        } elseif (strpos($entirestring, 'public') !== false && strpos($entirestring, 'private') !== true && strpos($entirestring, 'profit') !== false) {
            $control[0] = 'public';
            $control[1] = 'profit';
        }

    }

    /*if (isset($_GET['control'])) {
        $controlarray = array();
        foreach ($_GET['control'] as $ctrl) {

        }
    }*/

    if (isset($_GET['serving'])) {
        $serving = $_GET['serving'];
    }

    if (isset($_GET['religious'])) {
        $religious = $_GET['religious'];
    }

    echo '<br/>';
    echo $name;
    echo '<br/>';
    echo $zip;
    echo '<br/>';
    echo $major;
    echo '<br/>';
    echo $serving;
    echo '<br/>';
    echo $religious;
    echo '<br/>';
    for ($x = 0; $x < count($size); $x++) {
        echo $size[$x];
        echo '<br/>';
    }
    for ($y = 0; $y < count($control); $y++) {
        echo $control[$y];
        echo '<br/>';
    }


    $stid = oci_parse($conn, 'SELECT * FROM COLLEGE1');
    oci_execute($stid);

    echo "<table border='1'>\n";
    while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
        echo "<tr>\n";
        foreach ($row as $item) {
            echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
}


oci_close($conn);
?>

</body>
</html>