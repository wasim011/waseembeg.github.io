<?php include('includes/header.php'); ?>
<main>
    <h2>Contact Me</h2>
    <form method="POST" action="send_mail.php">
        <input type="text" name="name" placeholder="Your Name" required><br>
        <input type="email" name="email" placeholder="Your Email" required><br>
        <textarea name="message" placeholder="Your Message" required></textarea><br>
        <button type="submit">Send</button>
    </form>
</main>
<?php include('includes/footer.php'); ?>
