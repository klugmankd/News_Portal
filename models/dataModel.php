<?php
    include_once ("connectionModel.php");

    function getNews ($limit, $id) {
        global $mysqli;
        connectDB();
        if ($id)
            $where = "WHERE `id` = $id";
        $result = $mysqli->query("SELECT * FROM `news` {$where} order by `id` desc LIMIT $limit;");
        closeDB();
        if (!$id)
            return resultToArray($result);
        else
            return mysqli_fetch_array($result);
    }

    function resultToArray($result) {
        $array = array();
        while ($row = mysqli_fetch_array($result))
            $array[] = $row;
        return $array;
    }