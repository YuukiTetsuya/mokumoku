<?php
if (!isset($_POST['id'])) {
    print "idがありません";
};

$id = $_POST['id'];
print $id;
