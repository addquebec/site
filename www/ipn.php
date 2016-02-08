<?php
    require_once('../bootstrap.php');
    $paypalmode = ''; //Sandbox for testing or empty ''

if($_POST)
{
        if($paypalmode=='sandbox')
        {
            $paypalmode     =   '.sandbox';
        }
        $req = 'cmd=' . urlencode('_notify-validate');
        foreach ($_POST as $key => $value) {
            $value = urlencode(stripslashes($value));
            $req .= "&$key=$value";
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www'.$paypalmode.'.paypal.com/cgi-bin/webscr');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: www'.$paypalmode.'.sandbox.paypal.com'));
        $res = curl_exec($ch);
        curl_close($ch);

        if (strcmp ($res, "VERIFIED") == 0)
        {
            $transaction_id = $_POST['txn_id'];
            $payerid = $_POST['payer_id'];
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $payeremail = $_POST['payer_email'];
            $paymentdate = $_POST['payment_date'];
            $paymentstatus = $_POST['payment_status'];
            $mdate= date('Y-m-d h:i:s',strtotime($paymentdate));
            $otherstuff = json_encode($_POST);

            // insert in our IPN record table
			include 'ajout_abonnee.php';
            //$query = "INSERT INTO paypal(horaire, debut, fin, nom, prenom, telephone, courriel, decouverteAdd, id) VALUES('test', 'test', 'test', 'test', 'test', 'test', 'test', 'test','')";

            if(!ADD\DB::query($query))
            {
                //mysql error..!
            }
        }
}
?>
