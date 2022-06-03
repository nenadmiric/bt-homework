<?php

 abstract class Contact {
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

    

    public function displayMe() {
        echo $this->email . $this->phone;
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
        echo $contact->displayMe();
    }
}

class CustomerContact extends Contact {
    protected $firstName;
    protected $lastName;

    public function Setfirstname($firstName) {
        $this->firstName = $firstName;
    }
    public function Setlastname($lastName) {
        $this->lastName = $lastName;
    }

    public function displayMe() {
        echo "Name is " . $this->firstName . ", last name is " . $this->lastName . ", phone is " . $this->phone . " and email is " . $this->email . ".";
    }

}

class BusinessContact extends Contact {
    protected $address; 
    protected $companyName;

    public function setaddress($address) {
        $this->address = $address;
    }

    public function setcompanyname($companyName) {
        $this->companyName = $companyName;
    }

    public function displayMe() {
        echo "Company name is " . $this->companyName . ", company adress is " . $this->address . ", company phone is " . $this->phone . " and company email is " . $this->email;
    }
}


$contact1 = new CustomerContact;
$contact1->SetPhone('064123456789');
$contact1->SetEmail('pera@peric.com');
$contact1->Setfirstname('Pera');
$contact1->Setlastname('Peric');

echo $contact1->ContainsPhone();
echo "<br>";
echo $contact1->ContainsEmail();
echo "<br>";

$contact2 = new CustomerContact;
$contact2->SetPhone('062987654');
$contact2->SetEmail('mika@mikic.com');
$contact2->Setfirstname('Mika');
$contact2->Setlastname('Mikic');

echo "<br>";
echo $contact2->ContainsPhone();
echo "<br>";
echo $contact2->ContainsEmail();
echo "<br>";
echo "<br>";

$company1 = new BusinessContact;
$company1->SetPhone('0381444444');
$company1->SetEmail('co1@co1.com');
$company1->setaddress('Vojvode Misica');
$company1->setcompanyname('Co1');


$company2 = new BusinessContact;
$company2->SetPhone('7895545220');
$company2->SetEmail('preduzece@preduzece.com');
$company2->setaddress('Bulevar oslobodjenja');
$company2->setcompanyname('Preduzece');


$kontaktLista = new ContactList;
$kontaktLista->addContact($contact1);
$kontaktLista->addContact($contact2);
$kontaktLista->addContact($company1);
$kontaktLista->addContact($company2);
echo $kontaktLista->listAllContacts();

echo $contact1->displayMe();
echo "<br>";
echo "<br>";
echo $contact2->displayMe();
echo "<br>";
echo "<br>";
echo $company1->displayMe();
echo "<br>";
echo "<br>";
echo $company2->displayMe();


?>