<?php
// formos validacija START ========================================================

// susikuriam kad nereiketi tikrinti ar isset()
$name = $lname = $email = $message = '';
$nameErr = $lnameErr = $emailErr = $messageErr = '';

// visas helper funkcijos
function test_inputField($input)
{
    $checkedInput = trim($input);
    $checkedInput = htmlspecialchars($checkedInput);
    return $checkedInput;
}

function checkName($string)
{
    // validuojam lauka
    global $nameErr;
    if (!preg_match("/^[a-zA-Z-' ]*$/", $string)) {
        return $nameErr = "Only letterns and speced are allowed";
    }
}

function checkLname($string)
{
    global $lnameErr;
    if (!preg_match("/^[a-zA-Z-' ]*$/", $string)) {
        return $lnameErr = "Only letterns and speced are allowed";
    }
}

function checkMsg($string)
{
    global $messageErr;
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $string)) {
        $messageErr = "Please check message field";
    }
}


function valid_email($email)
{
    global $emailErr;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = 'Please check the email';
    }
}



// patikrinimas ar forma buvo isiusta
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name'])) {
        $nameErr = 'Please enter the name';
    } else {
        $name = test_inputField($_POST['name']);
        checkName($name);
    }

    if (empty($_POST['lname'])) {
        $lnameErr = 'Please enter the surname';
    } else {
        $lname = test_inputField($_POST['lname']);
        checkLname($lname);
    }


    if (empty($_POST['email'])) {
        $emailErr = 'Email cant be blank';
    } else {
        $email = test_inputField($_POST['email']);
        // tikrinam ar galimas email formatas
        valid_email($email);
    }

    if (!empty($_POST['message'])) {
        // tikrinam ar geras formatas
        $checkMs = test_inputField($_POST['message']);
        checkMsg($message);
    }
}

// formos validacija END ============================================================
