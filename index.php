<?php
    $page_title = "Our Menu";
    $header_class = "bg-menu";
    $active_page = "menu";

    include 'includes/header.inc.php';
?>

<main class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Discover Our Delicacies</h2>
    <p class="text-gray-600 text-center max-w-3xl mx-auto mb-12">
        Every dish is a piece of art, crafted with passion and the finest ingredients. Our menu is a journey through flavors, designed to delight your senses.
    </p>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://placehold.co/600x400/FFF4E6/333333?text=Grilled+Salmon" alt="Grilled Salmon" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Signature Grilled Salmon</h3>
                <p class="text-gray-600 mb-4">Served with a lemon-dill sauce, roasted asparagus, and quinoa.</p>
                <span class="text-lg font-bold text-amber-600">$24.50</span>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://placehold.co/600x400/E6F4FF/333333?text=Ribeye+Steak" alt="Ribeye Steak" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">12oz Ribeye Steak</h3>
                <p class="text-gray-600 mb-4">Aged for 28 days, cooked to perfection, with garlic mashed potatoes.</p>
                <span class="text-lg font-bold text-amber-600">$32.00</span>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://placehold.co/600x400/F0FFF0/333333?text=Pasta+Primavera" alt="Pasta Primavera" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Pasta Primavera</h3>
                <p class="text-gray-600 mb-4">Fresh seasonal vegetables and penne pasta in a light cream sauce.</p>
                <span class="text-lg font-bold text-amber-600">$18.75</span>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://placehold.co/600x400/FFF0F5/333333?text=Lava+Cake" alt="Lava Cake" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Chocolate Lava Cake</h3>
                <p class="text-gray-600 mb-4">Warm molten chocolate cake with a scoop of vanilla bean ice cream.</p>
                <span class="text-lg font-bold text-amber-600">$9.50</span>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://placehold.co/600x400/F5F5DC/333333?text=Caesar+Salad" alt="Caesar Salad" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Classic Caesar Salad</h3>
                <p class="text-gray-600 mb-4">Crisp romaine lettuce, parmesan, croutons, and our signature dressing.</p>
                <span class="text-lg font-bold text-amber-600">$12.00</span>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://placehold.co/600x400/FAFAD2/333333?text=Bruschetta" alt="Bruschetta" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Tomato Bruschetta</h3>
                <p class="text-gray-600 mb-4">Toasted baguette topped with fresh tomatoes, garlic, basil, and olive oil.</p>
                <span class="text-lg font-bold text-amber-600">$8.50</span>
            </div>
        </div>
    </div>
</main>

<?php
    include 'includes/footer.inc.php';
?>