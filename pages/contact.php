<section>
    <h1>Contact</h1>
    <form method="post" action="../public/save.php">
        <label for="id-username">Username</label>
        <input type="text" id="id-username" name="username" minlength="6" maxlength="20">

        <label for="id-email">Email</label>
        <input type="email" id="id-email" name="email" placeholder="Exemple@exemple.fr" pattern="^[A-Za-z]+@{1}[A-Za-z]+\.[A-Za-z]{2,}$">

        <label for="id-message">Message</label>
        <input type="text" id="id-message" name="message" placeholder="Message..." maxlength="280">

        <input type="submit" name="send" value="Envoyer">
    </form>
</section>
