<html>
<head>
</head>
<body>
    <h1>Aplikasi bengkel motor</h1>
    <form action="proses.php" method ="POST"> 
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama"/>
</p>
                <p>
                    <label for="keluhan">keluhan:</label>
                    <input type="text" name="keluhan"/>
</p>
                <p>
                    <label for="merk_motor" name="merk_motor"> Jenis Vaksin: </label>
</p>
                <p>
                    <label for=""> </label>
                    <label><input type="radio" name="merk_motor" value="mio"> mio</label>
</p>
                <p>
                    <label for=""> </label>
                    <label><input type="radio" name="merk_motor" value="vixion"> vixion</label>
</p>
                <p>
                    <label for=""> </label>
                    <label><input type="radio" name="merk_motor" value="nmax"> nmax</label>
</p>
<p>
                    <label for=""> </label>
                    <label><input type="radio" name="merk_motor" value="jupiter"> jupiter</label>
</p>
                <p>
                    <input type="submit" value="submit" name="submit" />
</p>
</fieldset>
</form>
</body>
</html>