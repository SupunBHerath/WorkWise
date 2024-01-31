
<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>

<style>
body{
    margin: 0;
}
.headerbar{
    margin-top: -30px;
    padding: 0;
    height: 50px;
    background-color: #13544e;
   
}
.headerbar h3{
    padding: 5px;
    text-align: center;
    font-size: 30px;
    color: white;
}
    header {
    overflow: hidden;
}

#movetext {
    white-space: nowrap;
    animation: moveText 30s linear infinite;
}

@keyframes moveText {
    from {
        transform: translateX(60%);
        /* left: 100%; */
    }
    to {
        transform: translateX(-60%);
        /* right: 100%; */
    }
}
</style>
    <header>
        <div class="headerbar">
            <h3 id="movetext"></h3>
        </div>
        <script>
            var text = ['Welcome to <?php echo $_SESSION['fName'].' '.$_SESSION['lName']; ?>', 'The #1 site for Remote Jobs ', 'Find your best Job '];
            var index = 0;

            function printText() {
                document.getElementById('movetext').innerHTML = text[index];

                if (index == text.length - 1) {
                    index = -1;
                }
                index++;
                setTimeout(printText, 30500);
            }
            printText();
        </script>
    </header>

