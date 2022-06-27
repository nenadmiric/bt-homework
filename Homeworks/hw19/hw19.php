<?php

 class Contact {
    protected $phone;
    protected $email;
    
    public function SetPhone($phone) {
        $this->phone = $phone;
    }

    public function SetEmail($email) {
        $this->email = $email;
    }

    public function GetPhone() {
        return $this->phone;
    }

    public function GetEmail() {
        return $this->email;
    }

    public function ContainsPhone() {
        $text_phone='064';
        $phone=$this->phone;
        if (str_contains($phone, $text_phone)) {
            echo "$text_phone se nalazi u $phone";
        } else {
            echo "$text_phone se ne nalazi u $phone";
        }
    }

    public function ContainsEmail() {
        $text_email='primer';
        $email=$this->email;
        if (str_contains($email, $text_email)) {
            echo "$text_email se nalazi u $email";
        } else {
            echo "$text_email se ne nalazi u $email";
        }
    }



}

class ContactList {
    protected $contacts=[];

    public function addContact($contact) {
        if ($contact instanceof Contact) {
            $this->contact[]=$contact;
        }
    }

    public function listAllContacts() {
        foreach($this->contacts as $contact)
        echo $contact;
    }
}



$contact1 = new Contact;
$contact1->SetPhone('064123456789');
$contact1->SetEmail('pera@peric.com');


echo $contact1->ContainsPhone();
echo "<br>";
echo $contact1->ContainsEmail();
echo "<br>";

$contact2 = new Contact;
$contact2->SetPhone('062987654');
$contact2->SetEmail('mika@mikic.com');


echo "<br>";
echo $contact2->ContainsPhone();
echo "<br>";
echo $contact2->ContainsEmail();
echo "<br>";
echo "<br>";


$kontaktLista = new ContactList;
$kontaktLista->addContact($contact1);
$kontaktLista->addContact($contact2);

echo $kontaktLista->listAllContacts();

print_r($contact1);
echo "<br>";
print_r($contact2);



?>