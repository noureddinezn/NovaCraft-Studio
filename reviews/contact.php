
<?php

$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    
    $nom = trim($_POST["nom"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

   
    if (empty($nom)) {
        $errors[] = "Le nom est obligatoire.";
    }

    if (empty($email)) {
        $errors[] = "L'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide.";
    }

    if (empty($message)) {
        $errors[] = "Le message est obligatoire.";
    }

    
    if (empty($errors)) {
        $success = "Votre message a bien été envoyé !";

        
    }
}
?>
<?php if (!empty($errors)) : ?>
    <div class="max-w-xl mx-auto mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
        <ul>
            <?php foreach ($errors as $e): ?>
                <li><?= $e ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (!empty($success)) : ?>
    <div class="max-w-xl mx-auto mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
        <?= $success ?>
    </div>
<?php endif; ?>







<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>

    <form method="post" action="https://formspree.io/f/mldqlpwq" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">
        <input type="text" name="nom" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg">
        <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg">
        <textarea name="message" placeholder="Votre message" class="w-full border px-4 py-2 rounded-lg"></textarea>
        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
    </form>
</section>
