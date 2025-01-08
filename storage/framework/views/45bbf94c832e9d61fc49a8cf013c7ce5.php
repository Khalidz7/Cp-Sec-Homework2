<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
        <div class="grid gap-4 mb-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
            <?php
               $products = [
                    [
                        'name' => 'Reusable Bamboo Utensils Set',
                        'price' => 15.99,
                        'image' => 'https://img.freepik.com/free-photo/flat-lay-arrangement-zero-waste-products-green-background_23-2148491166.jpg?uid=R84301865&ga=GA1.1.1382324444.1734506381&semt=ais_hybrid',
                        'features' => ['Eco-Friendly', 'Reusable'],
                        'description' => 'A set of eco-friendly bamboo utensils, perfect for on-the-go meals.',
                    ],
                    [
                        'name' => 'Stainless Steel Water Bottle',
                        'price' => 19.99,
                        'image' => 'https://img.freepik.com/free-vector/realistic-isolated-thermos-flask-cup-composition-silver-metal-closed-open-lid-vector-illustration_1284-77963.jpg?uid=R84301865&ga=GA1.1.1382324444.1734506381&semt=ais_hybrid',
                        'features' => ['Leak-Proof', 'Durable'],
                        'description' => 'A durable water bottle designed to keep beverages hot or cold for hours.',
                    ],
                    [
                        'name' => 'Organic Cotton Tote Bag',
                        'price' => 12.99,
                        'image' => 'https://img.freepik.com/premium-vector/bring-your-own-bag-poster-use-reusable-cotton-bag_124848-105.jpg?uid=R84301865&ga=GA1.1.1382324444.1734506381&semt=ais_hybrid',
                        'features' => ['Stylish', 'Reusable'],
                        'description' => 'A reusable tote bag made from 100% organic cotton.',
                    ],
                    [
                        'name' => 'Biodegradable Plant Pots',
                        'price' => 9.99,
                        'image' => 'https://img.freepik.com/free-photo/flat-lay-growing-plants_23-2149198331.jpg?uid=R84301865&ga=GA1.1.1382324444.1734506381&semt=ais_hybrid',
                        'features' => ['Eco-Friendly', 'Gardening'],
                        'description' => 'A set of 5 biodegradable pots for planting herbs, flowers, or vegetables.',
                    ],
                    [
                        'name' => 'Reusable Beeswax Food Wraps',
                        'price' => 14.99,
                        'image' => 'https://img.freepik.com/free-photo/loaf-bread-tied-with-rope-marble-surface_114579-72132.jpg?t=st=1736292770~exp=1736296370~hmac=11479d12858fa85a52ffe576d02828579bcdaa640d80bb85ae020b5d3c08d3ba&w=1800',
                        'features' => ['Sustainable', 'Reusable'],
                        'description' => 'Reusable beeswax wraps for preserving food without plastic waste.',
                    ],
                    [
                        'name' => 'Solar-Powered LED Lantern',
                        'price' => 25.99,
                        'image' => 'https://img.freepik.com/free-photo/beautiful-shot-modern-glowing-lamp_181624-17502.jpg?t=st=1736292839~exp=1736296439~hmac=cd5685105077c60c762358a8596d7cfe358aa31ae9b2a2a65ee5ddc099c141c5&w=1800',
                        'features' => ['Energy Efficient', 'Portable'],
                        'description' => 'An eco-friendly lantern charged by solar power, great for camping.',
                    ],
                    [
                        'name' => 'Eco-Friendly Laundry Detergent Strips',
                        'price' => 13.99,
                        'image' => 'https://img.freepik.com/premium-photo/set-reusable-bags-shopping-products-without-plastic-green-background-with-copy-space_255440-1348.jpg?w=1800',
                        'features' => ['Compact', 'Biodegradable'],
                        'description' => 'Lightweight detergent strips that are biodegradable and effective.',
                    ],
                    [
                        'name' => 'Handmade Natural Soap Bars',
                        'price' => 11.99,
                        'image' => 'https://img.freepik.com/free-photo/hygiene-cosmetic-balmy-products_23-2148287655.jpg?uid=R84301865&ga=GA1.1.1382324444.1734506381&semt=ais_hybrid',
                        'features' => ['Organic', 'Gentle on Skin'],
                        'description' => 'Handmade soap bars crafted from organic ingredients and free of harsh chemicals.',
                    ],
                ];
            ?>

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm" x-data="{ showDetails: false }">
                    <div class="w-full h-56">
                        <a href="#">
                            <img class="h-full mx-auto" src="<?php echo e($product['image']); ?>" alt="<?php echo e($product['name']); ?>" />
                        </a>
                    </div>
                    <div class="pt-6">
                        
                        <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline">
                            <?php echo e($product['name']); ?>

                        </a>

                        <ul class="flex items-center gap-4 mt-2">
                            <?php $__currentLoopData = $product['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                    </svg>
                                    <p class="text-sm font-medium text-gray-500"><?php echo e($feature); ?></p>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                        <div class="flex items-center justify-between gap-4 mt-4">
                            
                            <p class="text-2xl font-extrabold leading-tight text-gray-900">$<?php echo e($product['price']); ?></p>

                            <button @click="showDetails = !showDetails"
                                class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium bg-black text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                                View Details
                            </button>
                        </div>

                        
                        <div x-show="showDetails" class="mt-4 text-gray-600">
                            <p><?php echo e($product['description']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH /Users/khalid/Developer/Laravel/EcoLifeSolutions/resources/views/products.blade.php ENDPATH**/ ?>