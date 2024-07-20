// <?php
// include('navbar.php');
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="master.html">
    <title>3sq</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav>
        <div class="part">
            <a href="index.php">Beranda</a>
            <a href="tentang.html">Tentang</a>
            <a href="keluarga.html">Keluarga</a>
            <a href="teman.html">Teman</a>
            <a href="hobi.html">Hobi</a>
        </div>
    </nav>

    <div class="judul">
        <h1><b>Index<b></h1>
    </div>

    <section class="beranda1">
        <div class="downloadLinks">
                <h1>Home Page</h1>
                <a href="assets/override.mp3" id="downloadOverride" target="">override.mp3</a>
                <!-- ENGEKI IS OVERRIDE (PLACEHOLDER FOR TESTING, PLEASE CHANGE THE FILE) -->
                <a href="assets/engeki.mp3" id="downloadEngeki" target="">engeki.mp3</a>
        </div>
    </section>
    
    <script>
        const files = [
            { path: 'assets/override.mp3', filename: 'override.mp3' },
            { path: 'assets/engeki.mp3', filename: 'engeki.mp3' },
            // ... Add more file objects as needed
        ];

        const downloadList = document.getElementById('downloadLinks');

        files.forEach(file => {
            const downloadItem = document.createElement('div');
            downloadItem.classList.add('download-item'); // Add a CSS class for styling (optional)

            const downloadLink = document.createElement('a');
            downloadLink.href = file.path;
            downloadLink.download = file.filename;
            downloadLink.textContent = file.filename; // Display filename as link text

            downloadItem.appendChild(downloadLink);

            downloadList.appendChild(downloadItem);

            downloadLink.addEventListener('click', () => {
                // No need to create a hidden element here, event bubbling takes care of it
            });
        });
    </script>
</body>
</html>
