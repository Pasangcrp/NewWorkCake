<?php
$menu = [
    ["Chocolate Cake", "http://localhost/new_work_cake/assets/chocolate.jpg", 51, "Rich and moist chocolate cake topped with ganache."],
    ["Vanilla Bean Cake", "http://localhost/new_work_cake/assets/vanilla.jpg", 42.5, "Light and fluffy vanilla cake with a creamy frosting."],
    ["Black Forest Cake", "http://localhost/new_work_cake/assets/Blackforest.jpg", 40, "A chocolate and cream cake with a rich cherry filling."],
    ["Red Velvet Cake", "http://localhost/new_work_cake/assets/red velvet.jpg", 60.1, "A sweet marriage of buttermilk and vanilla with a little cocoa for good measure."],
    ["Carrot Cake", "http://localhost/new_work_cake/assets/carrot.jpg", 59.1, "Sweet and moist spice cake, full of cut carrots and toasted nuts, and covered in cream cheese icing."],
    ["Marble Cake", "http://localhost/new_work_cake/assets/Marble.jpg", 65.1, "A streaked or mottled appearance achieved by lightly blending light and dark batter."],
    ["Coffee Cake", "http://localhost/new_work_cake/assets/coffee cake.jpg", 66.1, "A sweet marriage of buttermilk and vanilla with a little cocoa for good measure."],
    ["White Forest Cake", "http://localhost/new_work_cake/assets/white.jpg", 40, "A sweet bread typically served with coffee but not typically made with coffee as an ingredient or flavoring."],
];

foreach ($menu as $item) {
    echo '<div class="menu-item">';
    echo '<img src="' . htmlspecialchars($item[1]) . '" alt="' . htmlspecialchars($item[0]) . '">';
    echo '<h3>' . htmlspecialchars($item[0]) . '</h3>';
    echo '<p>$' . number_format($item[2], 2) . '</p>';
    echo '<p>' . htmlspecialchars($item[3]) . '</p>';
    
    // Modified button with data-item-image attribute
    echo '<button class="add-to-cart-btn" data-item-name="' . htmlspecialchars($item[0]) . '" data-item-price="' . number_format($item[2], 2) . '" data-item-image="' . htmlspecialchars($item[1]) . '">Add to Cart</button>';
    
    echo '</div>';
}
?>
