<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The page title is set dynamically -->
    <title><?php echo isset($page_title) ? $page_title . ' | Culinary Restaurant' : 'Culinary Restaurant'; ?></title>
    
    <!-- Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    
    <style>
        /* Custom styles */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8F9FA;
        }
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
        
        /* Common styles for the header banner */
        .header-banner {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }
        
        /* Overlay to make text more readable */
        .header-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        /* Specific background images for each page */
        /* These classes are applied dynamically from the PHP pages */
        .bg-menu {
            background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1920&auto=format&fit=crop');
        }
        .bg-mission {
            background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1920&auto=format&fit=crop');
        }
        .bg-ingredients {
            background-image: url('https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=1920&auto=format&fit=crop');
        }

        /* Style for the active navigation link */
        .nav-link-active {
            color: #f59e0b; /* amber-500 */
            border-bottom: 2px solid #f59e0b;
        }
    </style>
</head>
<body class="text-gray-700">

    <!-- Header Section -->
    <!-- The PHP class here changes the background image based on the page -->
    <header class="header-banner text-white shadow-lg <?php echo isset($header_class) ? $header_class : 'bg-menu'; ?>">
        <div class="relative container mx-auto px-4">
            <!-- Top Navigation -->
            <nav class="flex justify-between items-center py-6">
                <a href="index.php" class="text-3xl font-bold tracking-wider">JC-CULINARY</a>
                <ul class="hidden md:flex items-center space-x-8 text-lg">
                    <li><a href="index.php" class="hover:text-amber-400 transition-colors <?php echo ($active_page == 'menu') ? 'nav-link-active' : ''; ?>">Our Menu</a></li>
                    <li><a href="mission.php" class="hover:text-amber-400 transition-colors <?php echo ($active_page == 'mission') ? 'nav-link-active' : ''; ?>">Our Mission</a></li>
                    <li><a href="ingredients.php" class="hover:text-amber-400 transition-colors <?php echo ($active_page == 'ingredients') ? 'nav-link-active' : ''; ?>">Our Ingredients</a></li>
                </ul>
                <!-- Mobile menu button can be added here -->
            </nav>

            <!-- Header Content -->
            <div class="text-center py-24 md:py-32">
                <!-- The H1 title is also set dynamically -->
                <h1 class="text-5xl md:text-7xl font-bold mb-4"><?php echo isset($page_title) ? $page_title : 'Welcome'; ?></h1>
                <p class="text-xl md:text-2xl text-gray-200">Experience the art of flavor.</p>
            </div>
        </div>
    </header>
