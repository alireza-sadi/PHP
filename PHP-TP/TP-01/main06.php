<?php

$password="Mohsen";

echo crypt($password,1234)."\n";

echo crypt($password,4321)."\n";

echo md5($password)."\n";

echo sha1($password)."\n";