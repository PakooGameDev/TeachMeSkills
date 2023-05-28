<?php

include_once('./Traits/Calculate.php');
include_once('./Classes/Product.php');
include_once('./Classes/Order.php');
include_once('./Classes/Invoice.php');

$product1 = new Product(1, 'Шашлык', 2.82);
$product2 = new Product(2, 'Лук', 0.34);
$product3 = new Product(3, 'Хлеб', 1.25);

$order1 = new Order(1, $product1, 4);
$order2 = new Order(2, $product2, 2);
$order3 = new Order(3, $product3, 4);

$invoice1 = new Invoice(1, 'Йиржи Пржемыслов', [$order2]);

echo "{$product1->calculateProfit()} <br>\n";

$order1->changeQuantity(23);
echo "{$order1->getProductInfo()} <br>\n";
echo "{$order1->calculateProfit()} <br>\n";

$invoice1->addProduct($order1);
$invoice1->changeCustomer('Михаил Жванецкий');
echo "{$invoice1->getCustomer()} <br>\n";
echo "{$invoice1->calculateProfit()} <br>\n";


?>