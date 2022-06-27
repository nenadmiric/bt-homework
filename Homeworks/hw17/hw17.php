<?php

$users = [
    [
        'name' => "Pera",
        'last_name' => "Miric",
    ],
    [
        'name'=> "Mitar",
        'last_name' => "Miric",
    ]
    ];

function search_users($users, $searchContent = "") {
    foreach ($users as $korisnik) {
        foreach ($korisnik as $imeIliPrezime) {
            if (str_contains($imeIliPrezime, $searchContent)) {
                print_r($korisnik);
            }
        }
    }
}

search_users($users, "Pera");

//search_users($users, "Miric");

//search_users($users, "ic");

//search_users($users, "blabla");

?>