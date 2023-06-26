<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-page-topbar">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                           
                        </div>
                        
                    </div>
                </div>
                <div class="section-content">
                    <div class="row justify-content-center">
                        <?php
                        // Sample data for demonstration
                        $products = [
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Desktop.png',
                                'name' => 'Desktop Computers and Servers',
                                'price' => '21.00$ / no.5oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited -Ipad.png',
                                'name' => 'Tablets and iPads',
                                'price' => '15.00$ / no.6oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited  - Laptop.png',
                                'name' => 'Laptops',
                                'price' => '210.00$ / no5oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Printer.png',
                                'name' => 'Printers',
                                'price' => '21.00$ / no.5oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited -  Photocopier.png',
                                'name' => 'Copiers',
                                'price' => '21.00$ / no.5oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Shredder.png',
                                'name' => 'Shredders',
                                'price' => '5.00$ / no.8oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Cartridges.png',
                                'name' => 'Cartridges',
                                'price' => '10.00$ / no.2oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited  - Toners.png',
                                'name' => 'Toners',
                                'price' => '22.00$ / no.9oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Camera.png',
                                'name' => 'Ordinary Cameras',
                                'price' => '3.00 / no.3oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Headphones.png',
                                'name' => 'Headphones',
                                'price' => '50.00$ / no.1oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Mouse.png',
                                'name' => 'Computer Mice',
                                'price' => '8.00$ / no.4oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Keyboard.png',
                                'name' => 'Keyboards',
                                'price' => '15.00$ / no.3oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Speakers.png',
                                'name' => 'Speakers',
                                'price' => '35.00$ / no.2oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Monitor.png',
                                'name' => 'Monitors',
                                'price' => '120.00$ / no.6oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - Projector.png',
                                'name' => 'Projectors',
                                'price' => '200.00$ / no.7oz'
                            ],
                            [
                                'image' => 'assets/images/products/Telecorner Uganda limited - UPS.png',
                                'name' => 'Uninterruptible Power Supplies (UPS)',
                                'price' => '100.00$ / no.9oz'
                            ],
                        ];

                        // Number of products per page
                        $itemsPerPage = 4;

                        // Get current page number from URL
                        $currentPage = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

                        // Calculate total number of pages
                        $totalPages = ceil(count($products) / $itemsPerPage);

                        // Determine start and end indices of products on the current page
                        $startIndex = ($currentPage - 1) * $itemsPerPage;
                        $endIndex = min($startIndex + $itemsPerPage - 1, count($products) - 1);

                        // Loop through products on the current page
                        for ($i = $startIndex; $i <= $endIndex; $i++) {
                            $product = $products[$i];
                            ?>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <a href="<?php echo strtolower(str_replace(' ', '-', $product['name'])); ?>.php"><img src="<?php echo $product['image']; ?>" alt="image"></a>
                                    </div>
                                    <div class="product-card-text-area">
                                        <div class="product-info">
                                            <h4><a href="<?php echo strtolower(str_replace(' ', '-', $product['name'])); ?>.php"><?php echo $product['name']; ?></a></h4>
                                            <p><?php echo $product['price']; ?></p>
                                        </div>
                                        <a class="product-cart-btn" href="cart.php"><i class="flaticon-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="paginations mt-30">
                        <ul>
                            <?php if ($currentPage > 1) { ?>
                                <li><a href="products.php?page=<?php echo ($currentPage - 1); ?>"><i class="fas fa-angle-left"></i></a></li>
                            <?php } ?>

                            <?php
                            // Generate pagination links
                            for ($i = 1; $i <= $totalPages; $i++) {
                                ?>
                                <li class="<?php echo ($i == $currentPage) ? 'active' : ''; ?>"><a href="products.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php
                            }
                            ?>

                            <?php if ($currentPage < $totalPages) { ?>
                                <li><a href="products.php?page=<?php echo ($currentPage + 1); ?>"><i class="fas fa-angle-right"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
