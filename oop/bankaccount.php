<!DOCTYPE HTML>
<html>
    <head>
        <title>Bank accounts</title>
        
        <style>
            
            #tilit {
                width:100%;
                float:left;
                margin-bottom:30px;
            }
            
            .account {
                border: 1px solid;
                max-width: 200px;
                padding: 20px;
                margin: 10px;
                float: left;
            }
            
            .active {
                background-color:salmon;
            }
            
            .inactive {
                background-color:palegreen;
            }
        </style>
    </head>
    
    <body>
    
<div id="tilit">     
<?php

    class BankAccount {
        private $accountNumber;
        private $balance;
        private $dateOpened;
        private $accountType;
        private $activity;

    function __construct($accountNumber, $balance, $dateOpened, $accountType, $activity) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->dateOpened = $dateOpened;
        $this->accountType = $accountType;
        $this->activity = $activity;
    }

    function displayAccount() {
        echo '<div class="account">';
        echo "Tilin numero: " . $this->accountNumber . "<br>";
        echo "Saldo: " . $this->balance . "<br>";
        echo "Avaamispäivä: " . $this->dateOpened . "<br>";
        echo "Tilin tyyppi: " . $this->accountType . "<br>";

        if($this->activity == true) {
            echo "Aktiivinen: kyllä<br>";
        } else {
            echo "Aktiivinen: ei<br>";
        }
        echo "</div>";
    }
        
        function deposit() {
            $this->balance = $this->balance + 100;
            echo "Lisäsit 100 euroa tilille " . $this->accountNumber . ". Saldo on nyt " . $this->balance . " euroa.<br>";
        }
        
        function withdraw() {
            if($this->balance < 100) {
                echo "Tilillä " . $this->accountNumber . " ei ole tarpeeksi rahaa. Saldo on " . $this->balance . ".<br>";
            } else {
                $this->balance = $this->balance - 100;
                echo "Nostit 100 euroa tililtä " . $this->accountNumber . ". Saldo on nyt " . $this->balance . " euroa.<br>";
            }
        }
        
        function open() {
            $this->activity = true;
            echo "Tili " . $this->accountNumber . " on nyt aktiivinen.<br>";
        }
        
        function close() {
            $this->activity = false;
            echo "Tili " . $this->accountNumber . " on nyt suljettu.<br>";
        }
}

$accounts[] = new BankAccount('A7652', 500, '5/3/2000', 'Checking', false);
$accounts[] = new BankAccount('B2311', -50, '1/2/2012', 'Checking', true);
$accounts[] = new BankAccount('S2314', 7500, '1/2/1994', 'Savings', true);

foreach($accounts as $tili) {
    echo $tili->displayAccount();
}
    
$accounts[0]->deposit();
$accounts[2]->deposit();
$accounts[1]->withdraw();
$accounts[2]->withdraw();
$accounts[2]->close();
$accounts[0]->open();

?>
</div>
</body>
</html>
