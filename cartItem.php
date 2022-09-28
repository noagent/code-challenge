<?php

/**
 * 
 * CartItem
 * This class handle pcart roduct detils 
 * Comes with number of method to get standard cart rules such as get items in the cart, get total price etc  
 * 
 * @package       None 
 * @author        Mokter Hossain 
 * @version       N/A 
 * @access        public 
 * @see           https://www.php.net/
 * 
 * 
 */ 

class CartItem
{
    private Product $product;
    private int $quantity;

    /**
     * CartItem constructor.
     *
     * @param \Product $product
     * @param int      $quantity
     */
    public function __construct(\Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @return \Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

   /**
     * @return int
     */
    public function increaseQuantity($amount = 1)
    {
        if ($this->getQuantity() + $amount > $this->getProduct()->getAvailableQuantity()){
            throw new Exception("Product quantity can not be more than ".$this->getProduct()->getAvailableQuantity());
        }
        $this->quantity += $amount;
    }

    /**
     * @return string 
     */

    public function decreaseQuantity($amount = 1)
    {
        if ($this->getQuantity() - $amount < 1){
            throw new Exception("Product quantity can not be less than 1");
        }
        $this->quantity -= $amount;
    }
}
