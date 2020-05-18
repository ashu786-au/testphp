<?php

$result="";

if(isset($_POST['submit'])){
    require_once('PHPMailer/PHPMailerAutoload.php');

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML(true);
    $mail->Username = 'ashudps123@gmail.com';
    $mail->Password = 'Harihari2';
    $mail->SetFrom($_POST['email1'],$_POST['username']);
    $mail->Subject = 'hello world';
    $mail->Body =
         '<table>
        <tr>
            <th>
                Sl. No.
            </th>
            <th>
                Employees Name
            </th>
            <th>
                Project Name 
            </th>
            <th>
                Amount
            </th>
            <th>
                Expense Type
            </th>
            <th>
                Remarks
            </th>
        </tr>
        <tr>
            <td> 1. </td>
            <td>'.$_POST['name'].'</td>
            <td>'.$_POST['projectname'].'</td>
            <td>'.$_POST['number'].'</td>
            <td>'.$_POST['expensetype'].'</td>
            <td>'.$_POST['remarks'].'</td>
        </tr>
        <tr>
            <td> 2. </td>
            <td>'.$_POST['name1'].'</td>
            <td>'.$_POST['projectname1'].'</td>
            <td>'.$_POST['number1'].'</td>
            <td>'.$_POST['expensetype1'].'</td>
            <td>'.$_POST['remarks1'].'</td>
        </tr>
        <tr>
            <td> 3. </td>
            <td>'.$_POST['name2'].'</td>
            <td>'.$_POST['projectname2'].'</td>
            <td>'.$_POST['number2'].'</td>
            <td>'.$_POST['expensetype2'].'</td>
            <td>'.$_POST['remarks2'].'</td>
        </tr>
        <tr>
            <td> 4. </td>
            <td>'.$_POST['name3'].'</td>
            <td>'.$_POST['projectname3'].'</td>
            <td>'.$_POST['number3'].'</td>
            <td>'.$_POST['expensetype3'].'</td>
            <td>'.$_POST['remarks3'].'</td>
        </tr>
        <tr>
            <td> 5. </td>
            <td>'.$_POST['name4'].'</td>
            <td>'.$_POST['projectname4'].'</td>
            <td>'.$_POST['number4'].'</td>
            <td>'.$_POST['expensetype4'].'</td>
            <td>'.$_POST['remarks4'].'</td>
        </tr>
        <tr>
            <td> 6. </td>
            <td>'.$_POST['name5'].'</td>
            <td>'.$_POST['projectname5'].'</td>
            <td>'.$_POST['number5'].'</td>
            <td>'.$_POST['expensetype5'].'</td>
            <td>'.$_POST['remarks5'].'</td>
        </tr>
        <tr>
            <td> 7. </td>
            <td>'.$_POST['name6'].'</td>
            <td>'.$_POST['projectname6'].'</td>
            <td>'.$_POST['number6'].'</td>
            <td>'.$_POST['expensetype6'].'</td>
            <td>'.$_POST['remarks6'].'</td>
        </tr>
        <tr>
            <td> 8. </td>
            <td>'.$_POST['name7'].'</td>
            <td>'.$_POST['projectname7'].'</td>
            <td>'.$_POST['number7'].'</td>
            <td>'.$_POST['expensetype7'].'</td>
            <td>'.$_POST['remarks7'].'</td>
        </tr>
        <tr>
            <td> 9. </td>
            <td>'.$_POST['name8'].'</td>
            <td>'.$_POST['projectname8'].'</td>
            <td>'.$_POST['number8'].'</td>
            <td>'.$_POST['expensetype8'].'</td>
            <td>'.$_POST['remarks8'].'</td>
        </tr>
        <tr>
            <td> 10. </td>
            <td>'.$_POST['name9'].'</td>
            <td>'.$_POST['projectname9'].'</td>
            <td>'.$_POST['number9'].'</td>
            <td>'.$_POST['expensetype9'].'</td>
            <td>'.$_POST['remarks9'].'</td>
        </tr>
        <tr>
            <td> 11. </td>
            <td>'.$_POST['name10'].'</td>
            <td>'.$_POST['projectname10'].'</td>
            <td>'.$_POST['number10'].'</td>
            <td>'.$_POST['expensetype10'].'</td>
            <td>'.$_POST['remarks10'].'</td>
        </tr>
        <tr>
            <td> 12. </td>
            <td>'.$_POST['name11'].'</td>
            <td>'.$_POST['projectname11'].'</td>
            <td>'.$_POST['number11'].'</td>
            <td>'.$_POST['expensetype11'].'</td>
            <td>'.$_POST['remarks11'].'</td>
        </tr>
        <tr>
            <td> 13. </td>
            <td>'.$_POST['name12'].'</td>
            <td>'.$_POST['projectname12'].'</td>
            <td>'.$_POST['number12'].'</td>
            <td>'.$_POST['expensetype12'].'</td>
            <td>'.$_POST['remarks12'].'</td>
        </tr>
        <tr>
            <td> 14. </td>
            <td>'.$_POST['name13'].'</td>
            <td>'.$_POST['projectname13'].'</td>
            <td>'.$_POST['number13'].'</td>
            <td>'.$_POST['expensetype13'].'</td>
            <td>'.$_POST['remarks13'].'</td>
        </tr>
        <tr>
            <td> 15. </td>
            <td>'.$_POST['name14'].'</td>
            <td>'.$_POST['projectname14'].'</td>
            <td>'.$_POST['number14'].'</td>
            <td>'.$_POST['expensetype14'].'</td>
            <td>'.$_POST['remarks14'].'</td>
        </tr>
    </table>';

    $mail->AddAddress('ashish.prasad.895611@gmail.com');

    if(!$mail->send()){
        $result="Something Went Wrong. Please Try Again";
    }
    else{
        $result="Thanks " .$_POST['username']. " For Contacting Us.";
    }
}


?>