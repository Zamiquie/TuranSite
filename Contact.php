<!DOCTYPE html>

<html>
<head>
    <link  rel="stylesheet" type="text/css" href="assets\css.css" />
    <link rel="icon" type="image/gif" href="assets\ico.gif" />

    <title> CONTACT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css.css">
</head>

    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Accueil</a>
            <a class="navbar-brand" href="Service.php">Service</a>
            <a class="navbar-brand" href="Galerie.php">Galerie</a>
            <a class="navbar-brand" href="Contact.php">Contact</a>
        </nav>

        <!-- Formulaire Contact -->
        <form method="post" action="index.php">
            <div>
                <label for ="name"> Nom :</label>
                <input type="text" name="Name" id="name" autofocus required>
            </div>
            <div>
                <label> Prénom :</label>
                <input type="text" name="firstName" required >
            </div>
            <div>
                <label> Societe :</label>
                <input type="text" name="Societe">
            </div>
            <div>
                <label> Adresse :</label>
                <input type="text" name="Adress" required>
            </div>
            <div>
                <label> Ville :</label>
                <input type="text" name="City" required>
            </div>
            <div>
                <label> Code Postal :</label>
                <input type="text" name="PostalCode" maxlength="5" size="2" required>
            </div>
            <div>
                <label> Email :</label>
                <input type="email" name="mail" required>
            </div>
            <div>
                <label> Telephone :</label>
                <input type="tel;" name="Telephone" maxlength="10" size="7.5" required>
            </div>
            <div>
                <label> Votre Message :</label>
                <textarea id="Message" name="Message" maxlength="500" size="15" required></textarea>
            </div>

                <input type="submit" value="Valider" >
        </form>





    </body>

</html>