<?php
require_once("dbcontroller.php");
require_once("user.php");


//$name = $_POST['name'];
//$mobileno = $_POST['mobileno'];
$method = $_POST['method'];
/*$insert=new User();
$response=$insert->addusers($name,$mobileno);
echo $response;*/

switch($method)
{

		case "GET":
			$insert=new User();
            $response=$insert->getAllusers();
            $data=json_decode($response);
            echo '<table class="table-responsive table-bordered"><thead><th>VWS Licence Key</th><th>Client Access Key</th><th>Client Secret Key</th><th>Server Access Key</th><th>Server Secret Key</th></thead><tbody>';
            foreach ($data as $key => $value) {
            	echo '<tr>';
            	echo '<td>'.$value->vws.'</td><td>'.$value->cakey.'</td><td>'.$value->cskey.'</td><td>'.$value->sakey.'</td><td>'.$value->sskey.'</td>';
            	echo '</tr>';
            }
            echo '</tbody></table>';
			break;
	
		case "POST":
		    $vws = $_POST['vws'];
            $cakey = $_POST['cakey'];
            $cskey = $_POST['cskey'];
            $sakey = $_POST['sakey'];
            $sskey = $_POST['sskey'];
			$insert=new User();
            $response=$insert->addusers($vws,$cakey,$cskey,$sakey,$sskey);
            print_r(json_decode($response));
		break;
		
		case "delete":
			$insert=new User();
            $response=$insert->deleteUser($id);
		break;
		
		case "PUT":
			$insert=new User();
            $response=$insert->editUser($id);
		break;
}
?>