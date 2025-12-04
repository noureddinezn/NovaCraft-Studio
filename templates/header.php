<?php 
$lienclick = $page;
?>

<header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4">

        <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>

        <ul class="flex space-x-6">

            <li>
                <a href="/"
                   class="<?= $lienclick === '/' ? 'text-blue-700 font-bold underline' : 'text-blue-600' ?>">
                    Accueil
                </a>
            </li>

            <li>
                <a href="/service"
                   class="<?= $lienclick === '/service' ? 'text-blue-700 font-bold underline' : 'text-blue-600' ?>">
                    Services
                </a>
            </li>

            <li>
                <a href="/about"
                   class="<?= $lienclick === '/about' ? 'text-blue-700 font-bold underline' : 'text-blue-600' ?>">
                    À propos
                </a>
            </li>

            
        </ul>
    </nav>
</header>
