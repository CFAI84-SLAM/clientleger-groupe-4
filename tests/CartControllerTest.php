<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\AbstractBrowser;
use Symfony\Component\Panther\PantherTestCase;

class CartControllerTest extends WebTestCase
{
    private function getRandomProduct(AbstractBrowser $client): array
    {
        $crawler = $client->request('GET', '/');
        $productNode = $crawler->filter('.card')->eq(rand(0, 9));
        $productName = $productNode->filter('.card-title')->getNode(0)->textContent;
        $productPrice = (float)$productNode->filter('span.h5')->getNode(0)->textContent;
        $productLink = $productNode->filter('.btn-dark')->link();

        return [
            'name' => $productName,
            'price' => $productPrice,
            'url' => $productLink->getUri()
        ];
    }

    private function addRandomProductToCart(AbstractBrowser $client, int $quantite = 1): array
    {
        $product = $this->getRandomProduct($client);

        $crawler = $client->request('GET', $product['url']);
        $form = $crawler->filter('form')->form();
        $form->setValues(['add_to_cart[quantite]' => $quantite]);

        $client->submit($form);

        return $product;
    }

    use CartAssertionsTrait;

    public function testCartIsEmpty()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/panier');

        $this->assertResponseIsSuccessful();
        $this->assertCartIsEmpty($crawler);
    }

    public function testAddProductToCart()
    {
        $client = static::createClient();
        $product = $this->addRandomProductToCart($client);
        $crawler = $client->request('GET', '/panier');

        $this->assertResponseIsSuccessful();
        $this->assertCartItemsCountEquals($crawler, 1);
        $this->assertCartContainsProductWithQuantity($crawler, $product['name'], 1);
        $this->assertCartTotalEquals($crawler, $product['price']);
    }

    public function testAddProductTwiceToCart()
    {
        $client = static::createClient();

        // Gets a random product form the homepage
        $product = $this->getRandomProduct($client);

        // Go to a product page from
        $crawler = $client->request('GET', $product['url']);

        // Adds the product twice to the cart
        for ($i=0 ; $i<2 ;$i++) {
            $form = $crawler->filter('form')->form();
            $form->setValues(['add_to_cart[quantite]' => 1]);
            $client->submit($form);
            $crawler = $client->followRedirect();
        }

        // Go to the cart
        $crawler = $client->request('GET', '/panier');

        $this->assertResponseIsSuccessful();
        $this->assertCartItemsCountEquals($crawler, 1);
        $this->assertCartContainsProductWithQuantity($crawler, $product['name'], 2);
        $this->assertCartTotalEquals($crawler, $product['price'] * 2);
    }


    public function testRemoveProductFromCart()
    {
        $client = static::createClient();
        $product = $this->addRandomProductToCart($client);

        // Go to the cart page
        $client->request('GET', '/panier');

        // Removes the product from the cart
        $client->submitForm('Remove');
        $crawler = $client->followRedirect();

        $this->assertCartNotContainsProduct($crawler, $product['name']);
    }

    public function testClearCart()
    {
        $client = static::createClient();
        $this->addRandomProductToCart($client);

        // Go to the cart page
        $client->request('GET', '/panier');

        // Clears the cart
        $client->submitForm('Clear');
        $crawler = $client->followRedirect();

        $this->assertCartIsEmpty($crawler);
    }


    public function testUpdateQuantity()
    {
        $client = static::createClient();
        $product = $this->addRandomProductToCart($client);

        // Go to the cart page
        $crawler = $client->request('GET', '/panier');

        // Updates the quantite
        $cartForm = $crawler->filter('.col-md-8 form')->form([
            'cart[items][0][quantite]' => 4
        ]);
        $client->submit($cartForm);
        $crawler = $client->followRedirect();

        $this->assertCartTotalEquals($crawler, $product['price'] * 4);
        $this->assertCartContainsProductWithQuantity($crawler, $product['name'], 4);
    }

}
