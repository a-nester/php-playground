<?php

echo $_SERVER['REQUEST_METHOD'];

$contact_submit = $_POST['contact_form'] ?? '';
$search_submit = $_POST['search_form'] ?? '';

if ($contact_submit === 'submited') {
    echo '<br>send from Contact form';
}

if ($search_submit === 'submited') {
    echo 'send from Search form';
}
?>


<form method="POST" action="" id="form">
    <input type="text" name="name" />
    <input type="checkbox" name="yes" />
    <select name="number[]" multiple="true">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
    <button name="contact_form" type="submit" value="submited">Send</button>
</form>

<form method="POST" action="">
    <input type="text" name="s" />

    <button name="search_form" value="submited">Search</button>
</form>