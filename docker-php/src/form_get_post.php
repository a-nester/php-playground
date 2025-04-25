<?php

$success = false;
$contact_submit = $_POST['contact_form'] ?? '';

if ($contact_submit === 'submited') {
    $name = strip_tags(trim($_POST['name']));
    $phone = strip_tags(trim($_POST['phone']));
    $text = strip_tags(trim($_POST['text']));
    $yes = strip_tags(trim($_POST['yes'] ?? ''));

    $body = $name ."\n" .$phone."\n".$text."\n".$yes;

    if ($name === '' || $phone === '' || $text === '') {
        $errors = "Fill the required filelds";
    } 
    elseif (mb_strlen($name) > 20) {
        $errors = "Name can't be more then 20 letters";
    }
    elseif (mb_strlen($name) < 3) {
        $errors = "Name can't be less then 3 letters";
    }
    else {
        mail('a_nester@ukr.net', 'Contact Message', $body);
        $success = true;

    }
    

}
?>

<h1>Contact form</h1>
<style>
    label {
        width: 150px;
        display: block;
    }
</style>
<?php
if($success) {echo "Form was successfully sended";
} else {
    if(isset($errors)) echo $errors;
    ?>
<form method="POST" action="" id="form">
    <p> 
        <label for="name">Name:</label> 
        <input type="text" id="name" name="name" value="<?php if (isset($name)){ echo $name;} ?>"/> </p>
    <p> 
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php if (isset($phone)){ echo $phone;} ?>" /> </p>
    <p> 
        <label for="text">Text:</label>
        <textarea type="text" id="text" name="text"><?php if (isset($text)){ echo $text;} ?></textarea> </p>
    <p> 
        <label for="yes">Text:</label>
        <input type="checkbox" id="yes" name="yes" <?php if(isset($yes) && $yes === 'on') echo "checked"; ?>/> </p>

    <button name="contact_form" type="submit" value="submited">Send</button>
</form>
<?php } ?>

