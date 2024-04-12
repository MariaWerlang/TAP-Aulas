<?php
namespace App;

require 'vendor/autoload.php';

use App\src\arquivo01\Login_Implements;
use App\src\arquivo02\Login_Extends;

$login_implements = new Login_Implements();
$login_extends = new Login_Extends();


$login_implements->executar('Maria','123');
$login_extends->executar('Werlang','321');