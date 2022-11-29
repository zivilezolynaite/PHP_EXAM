<?php
// 5. Sukurkite forma, kuri leistų pridėti failą ir vėliau jį išsaugotų
// serveryje su formoje nurodytu failo pavadinimu (name).
// File forma:
// Name: [laboras.txt]
// File: [browse]
?>
<html>

<head>
    <style>
        body {
            margin: 2em;
        }

        form input,
        form button {
            text-align: center;
            margin-bottom: 0.6em;
        }
    </style>
</head>

<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="Add filename"><br>
        <input type="file" name="file" placeholder="Upload file"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>