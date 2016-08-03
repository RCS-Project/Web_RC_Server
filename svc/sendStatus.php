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
// sending user ESP8266 to php server for storage of status
// USED BY Client Reciever Module (ESP8266)
try {
    $status = $_GET["status"];
    $myfile = fopen("status.txt", "w");
    fwrite($myfile, $status);
    fclose($myfile);
    echo "S";
} catch (Exception $ex) {
    echo "e";
}
?>