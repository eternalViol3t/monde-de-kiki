<?php

include "conn.php";

function doLoads(string $page) {
    $n = $p = $ret = -1;
    
    // Create connection
    $conn = mysqli_connect($_SESSION["server"], $_SESSION["username"], $_SESSION["password"], $_SESSION["db"]);
    $default_page = "01-KiKi-dans-le-desert";
    
    // Check connection
    if (!$conn) {
        $err_txt = "Error: loads.php : connect(): " . mysqli_connect_error();
        error_log($err_txt, 0);
        error_log($err_txt, 1, "TODO-email");
    } else {
        if ($page == $default_page) {
            $n = doRead($conn, $page);
            $success = doWrite($conn, $page, $n + 1);
            $ret = $n + 1;
        } else {
            $n = doRead($conn, $page);
            $success = doWrite($conn, $page, $n + 1);
            
            //read also the main counter for the defaut page (first)
            $p = doRead($conn, $default_page);
            $ret = $p;
        }
    }
    $conn->close();
    return $ret;
}

function doRead(mysqli $conn, string $page) {
    $n = -1;
    if (!$conn) {
        $err_txt = "Error: loads.php : connect(): " . mysqli_connect_error();
        error_log($err_txt, 0);
        error_log($err_txt, 1, "TODO-email");
    } else {
        $sql = "SELECT views from osiris WHERE page='" . $page . "'";
        $rs = $conn->query($sql);
        if ($rs->num_rows > 0) {
            $row = $rs->fetch_assoc();
            $n = $row["views"];
        } else {
            $err_txt = "loads.php : SQL : page " . $page . ", field views not found in table osiris \r\n req: " . $sql;
            error_log($err_txt, 0);
            error_log($err_txt, 1, "TODO-email");
        }
    }
    return $n;
}

function doWrite(mysqli $conn, string $page, int $p) {
    $success = true;
    $sql = "UPDATE osiris SET views=" . $p . " WHERE page='" . $page . "'";
    if ($conn->query($sql) !== TRUE) {
        $success = false;
        $err_txt = "loads.php : SQL : Error UPDATE osiris \r\n req: " . $sql . "\r\n sql er: " . $conn->error;
        error_log($err_txt, 0);
        error_log($err_txt, 1, "TODO-email");
    }
    return $success;
}
?>