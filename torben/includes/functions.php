<?php

	function redirect_to($location) {
        header("Location: {$location}");
        exit;
    }

    function sanitize($conn, $data)

    {

        $data = trim($data);

        $data = strip_tags($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        mysqli_real_escape_string($conn, $data);

        return $data;

    }