<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resource/css/main.css">
    <title>Form</title>
</head>
<body>
    <img class="mainlogo" src="resource/images/logo.png" alt="logo">
    <form class="communicationForm" action="sonuc.php" method="post">
    <table>
        <tr>
            <td class="firstTd" >Name-Surname</td>
            <td class="secondTd">:</td>
            <td class="thirdTd"><input type="text" class="nameInput" name="adisoyadi"></td>
        </tr>
        <tr>
            <td class="firstTd">Phone Number</td>
            <td class="secondTd">:</td>
            <td class="thirdTd"><input type="text" class="phoneInput" name="telefon"></td>
        </tr>
        <tr>
            <td class="firstTd">E-Mail</td>
            <td class="secondTd">:</td>
            <td class="thirdTd"><input type="text" class="mailInput" name="emailadresi"></td>
        </tr>
        <tr>
            <td class="firstTd">Subject</td>
            <td class="secondTd">:</td>
            <td class="thirdTd"><input type="text" class="subjectInput" name="konusu"></td>
        </tr>
        <tr>
            <td class="firstTd">Message</td>
            <td class="secondTd">:</td>
            <td class="thirdTd"><textarea class="messageInput" name="mesaji"></textarea></td>
        </tr>
        <tr>
            <td><input class="formSubmitButton" type="submit" value="Gönder"></input></td>
             
        </tr>
    </table>


    </form>
</body>
</html>