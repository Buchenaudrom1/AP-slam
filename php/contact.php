<h1>Contactez-moi</h1>
<form action="contact.php" method="post">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br>

    <label for="message">Message :</label><br>
    <textarea id="message" name="message" required></textarea><br>

    <button type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<p>Merci $name, votre message a été envoyé avec succès !</p>";


?>