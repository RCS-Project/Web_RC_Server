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
try {
// sending user application to php server for storage
// USED BY Client Apllication
    $RemoteData = $_GET["data"];
    $myfile = fopen("remote_data.txt", "w") or die("e");
    fwrite($myfile, trim($RemoteData));
    fclose($myfile);
    echo trim($RemoteData);
} catch (Exception $ex) {
    echo "e";
}
?>