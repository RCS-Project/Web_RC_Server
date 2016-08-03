<?php
/*
Copyright (C) 2016 Subhajit Das

This file is part of Web RC Server.

Web RC Server free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Web RC Server is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
// receive php server storage data for status code in user application
// USED BY Client Apllication
try {
    $myfile = fopen("status.txt", "r") or die("e");
    if (filesize("status.txt") > 0)
        $status = fread($myfile, filesize("status.txt"));
    else
        $status = "0";
    fclose($myfile);
    echo trim($status);
} catch (Exception $ex) {
    echo "e";
}
?>