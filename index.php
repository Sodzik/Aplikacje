<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
    <style>
        td{
            width: 175px;
            line-height: 2;
        }
        table{
            height: 50px;
        }
        select, input {
            width: auto;
            font-size: 12px;
            border: 1px solid black;
            background-color: white;
            color: black;
            box-sizing: border-box;
}
    </style>
</head>
<body>
<form method="POST"></form>
    <h1>Zapisz się na kurs IT</h1>
<table><tr><td>
    <label for="imieInazwisko">Imię i nazwisko:</label></td>
    <td><input type="text" id="imieInazwisko"></td></tr>
    <tr><td>
    <label for="rodzajKursu">Wybierz kurs</label></td>
    <td><select id="rodzajKursu">
        <option value="">ㅤ</option>
        <option value="800">Programowanie PHP (800zł)</option>
        <option value="600">Baza danych SQL (600zł)</option>
        <option value="1200">Bezpieczeństwo sieci (1200zł)</option>
    </select></td></tr>
</table>
    <h3>Dodatki:</h3>
    <input type="checkbox" name="certyfikat" id="certyfikat">Certyfikat imienny (150 zł)<br>
    <input type="checkbox" name="druk" id="druk">Materiały drukowane (50 zł)<br>
    <input type="checkbox" name="elearning" id="elearning">Dostęp do e-leaningu (100 zł)<br>
    <table><tr><td>
        <label>Kod rabatowy:</label></td>
        <td><input type="text" id="rabat"></td>
    </tr></table>

    <input type="submit" value="Podsumuj zgłoszenie">
    </form>
</body>
</html>