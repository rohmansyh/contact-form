<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Contact Form</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h2>CONTACT FORM</h2>

        <form action="method=post">
            <div class="form-grup">
                <label for="">Nama</label>
                <input type="text">
            </div>
            <div class="form-grup">
                <label for="">NIM</label>
                <input type="text">
            </div>  
            <div class="form-grup">
                <label for="">Kelas</label>
                <input type="text">
            </div>
            <div class="form-grup">
                <label for="">Jenis Kelamin</label>
                <input type="text">
            </div>
            <div class="form-grup">
                <label for="">Email</label>
                <input type="text">
            </div>
           <div class="form-grup">
                <label for="">Pesan</label>
                <textarea rows="5" placeholder="Tulis pesan disini..."></textarea>
           </div>

            <div class="form-grup">
                <button type="submit" class="submit">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>