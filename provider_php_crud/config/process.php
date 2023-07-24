<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

if (!empty($data)) {

    if($data['type'] === "create") {
        $name = $data['name'];
        $phone = $data['phone'];
        $observation = $data['observation'];

        $createContactQuery = "INSERT INTO contacts (name, phone, observation) VALUE (:name, :phone, :observation)";

        $createContact = $conn->prepare($createContactQuery);
        $createContact->bindParam(":name", $name);
        $createContact->bindParam(":phone", $phone);
        $createContact->bindParam(":observation", $observation);

        try {
            $createContact->execute();
            $_SESSION["message"] = "Contato criado com sucesso.";

        } catch(PDOException $e) {
            $error = $e->getMessage();
            echo "Error: $error";
        }

    } else if($data['type'] === "edit") {
        $id = $data['id'];
        $name = $data['name'];
        $phone = $data['phone'];
        $observation = $data['observation'];

        $editContactQuery = "UPDATE contacts 
                        SET name = :name, phone = :phone, observation = :observation 
                        WHERE id = :id";
        
        $editContact = $conn->prepare($editContactQuery);
        
        $editContact->bindParam(":id", $id);
        $editContact->bindParam(":name", $name);
        $editContact->bindParam(":phone", $phone);
        $editContact->bindParam(":observation", $observation);

        try {
            $editContact->execute();
            $_SESSION["message"] = "Contato editado com sucesso.";

        } catch(PDOException $e) {
            $error = $e->getMessage();
            echo "Error: $error";
        }
    } if($data['type'] === "delete") {
        $id = $data['id'];

        $deleteContactQuery = "DELETE FROM contacts WHERE id = :id";

        $deleteContact = $conn->prepare($deleteContactQuery);
        $deleteContact->bindParam(":id", $id);
        
        try {
            $deleteContact->execute();
            $_SESSION["message"] = "Contato deletado com sucesso.";

        } catch(PDOException $e) {
            $error = $e->getMessage();
            echo "Error: $error";
        }
        
    }

    header("Location:" . $BASE_URL . "../index.php");

} else {
    
    if(!empty($_GET)) {
        $id = $_GET["id"];
    }
    
    if(!empty($id)) {
        $gettingContactQuery = "SELECT * from contacts WHERE id = :id";
    
        $gettingContact = $conn->prepare($gettingContactQuery);
        $gettingContact->bindParam(":id", $id);
        $gettingContact->execute();
    
        $contact = $gettingContact->fetch();
    
    } else {
        $contacts = [];
    
        $gettingContactsQuery = "SELECT * from contacts";
    
        $gettingContacts = $conn->prepare($gettingContactsQuery);
        $gettingContacts->execute();
    
        $contacts = $gettingContacts->fetchAll();
    
    }
}

$conn = null;

?>