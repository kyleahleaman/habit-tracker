<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexbox Image Gallery</title>
    <style>
        body {
            background-color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            text-align: center;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            width: 200px;
            background-color: #91c7b1;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
            margin-bottom: 7px;
        }

        .bios {
            text-align: left;
            color: #2a2b2e;
        }

        .topIntro {
            margin: auto;
            width: 70%;
            text-align: center;
        }

    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>About Us</h1>
    <div class="topIntro">
        <h3>
            The purpose of this website is to provide people with the motivation to build meaningful and 
            lasting habits through engaging with an animal of your choice.
        </h3>
        <br><br>
        <h3>
            Meet our team!
        </h3>
    </div>

    <div class="gallery">

        <div class="card">
            <h3>Sophia</h3>
            <div class="bios">
                <h5>Sophia is awesome and likes pink</h5>
            </div>
        </div>

        <div class="card">
            <h3>Paige</h3>
            <div class="bios">
            <h5>This class has been my first experience with coding. It has been a huge challenge for 
                me, but I am so glad that I took this opportunity. I hope that this habit tracker 
                can be useful and helpful.</h5>
            </div>
        </div>

        <div class="card">
            <h3>Kyleah</h3>
            <div class="bios">
            <h5>While I have coded before, this class has helped me gain valuable skills
                that I hope to continue using throughout my journey. I am extremely 
                grateful for everything I have learned, especially while 
                completeing this project.</h5>
            </div>
        </div>

        <div class="card">
            <h3>Emma</h3>
            <div class="bios">
            <h5>Coding is a recent passion of mine that I gained from being forced to join a 
                random elective at school. This world is newer to me, but I am happy to learn 
                all that I can, which is why I chose to join this program and stick with it 
                to the very end of this project.</h5>
            </div>
        </div>

    </div>

    <br><br><br>

    <?php include 'footer.php'; ?>

</body>
</html>