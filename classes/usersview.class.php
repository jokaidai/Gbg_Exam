<?php
class UsersView extends Users {

    public function showUser($userName) {
        $results = $this->getUser($userName);
        echo " Username: " . $results[0]['Username'] . "<br>" ;
        echo "Email : " . $results[0]['Email'];

    }
}


