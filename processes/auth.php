<?php
class auth{
    public function signup($conn, $ObjGlob){
        if(isset($_POST["signup"])){

            $errors = array();

            $fullname = $_SESSION["fullname"] = $conn->escape_values(ucwords(strtolower($_POST["fullname"])));
            $email_address = $_SESSION["email_address"] = $conn->escape_values(strtolower($_POST["email_address"]));
            $username = $_SESSION["username"] = $conn->escape_values(strtolower($_POST["username"]));

// Implement input validation and error handling
// =============================================
// Sanitize all inputs

// verify that the fullname has only letters, space, dash, quotation
if(ctype_alpha(str_replace(" ", "", str_replace("\'", "", $fullname))) === FALSE){
    $errors['nameLetters_err'] = "Invalid name format: Full name must contain letters and spaces only etc " . $fullname;
}

        }
    }
}