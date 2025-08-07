<?php
    $page_title = "Our Ingredients";
    $header_class = "bg-ingredients";
    $active_page = "ingredients";

    include 'includes/header.inc.php';
?>

<main class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">From Farm to Table</h2>
    <p class="text-gray-600 text-center max-w-3xl mx-auto mb-12">
        The secret to great food is great ingredients. We are proud to partner with local farmers and artisans who provide us with the freshest, highest-quality products available.
    </p>

    <div class="space-y-10">
        <div class="md:flex items-center gap-8">
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400/E6FFFA/333333?text=Fresh+Vegetables" alt="Fresh Vegetables" class="rounded-lg shadow-lg w-full">
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Seasonal & Organic Produce</h3>
                <p class="text-gray-700 leading-relaxed">
                    Our vegetables are sourced from Green Valley Farms, just 20 miles from our kitchen. They practice organic farming, ensuring that every vegetable is free from pesticides and bursting with natural flavor. This commitment to freshness means our menu changes with the seasons, offering you the best of what nature has to offer.
                </p>
            </div>
        </div>

        <div class="md:flex items-center gap-8 flex-row-reverse">
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400/FFF5E6/333333?text=Artisan+Meats" alt="Artisan Meats" class="rounded-lg shadow-lg w-full">
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Ethically Raised Meats</h3>
                <p class="text-gray-700 leading-relaxed">
                    We partner with Riverbend Ranch for our beef and poultry. Their animals are raised humanely on open pastures, without the use of hormones or antibiotics. This ethical approach not only respects the animals but also results in meat that is more tender, flavorful, and wholesome.
                </p>
            </div>
        </div>
        
        <div class="md:flex items-center gap-8">
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400/E6F0FF/333333?text=Fresh+Seafood" alt="Fresh Seafood" class="rounded-lg shadow-lg w-full">
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Sustainable Seafood</h3>
                <p class="text-gray-700 leading-relaxed">
                    Our seafood is delivered daily from Coastal Catch, a company dedicated to sustainable fishing practices. They work directly with fishermen to ensure that the seafood is responsibly sourced, protecting our oceans for future generations while bringing the freshest catch to your plate.
                </p>
            </div>
        </div>
    </div>
</main>

<?php
    include 'includes/footer.inc.php';
?>