<?php

namespace App\Database\Models;

use App\Database\Config\Connection;
use App\Database\Contracts\Crud;

class Products extends Connection implements Crud
{
    private $id, $name_en, $name_ar, $desc_en,
        $desc_ar,$price, $quantity, $code, $status,
        $sub_category_id, $brand_id, $admin_id, $created_at, $updated_at;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_en
     */ 
    public function getName_en()
    {
        return $this->name_en;
    }

    /**
     * Set the value of name_en
     *
     * @return  self
     */ 
    public function setName_en($name_en)
    {
        $this->name_en = $name_en;

        return $this;
    }

    /**
     * Get the value of name_ar
     */ 
    public function getName_ar()
    {
        return $this->name_ar;
    }

    /**
     * Set the value of name_ar
     *
     * @return  self
     */ 
    public function setName_ar($name_ar)
    {
        $this->name_ar = $name_ar;

        return $this;
    }

    /**
     * Get the value of desc_en
     */ 
    public function getDesc_en()
    {
        return $this->desc_en;
    }

    /**
     * Set the value of desc_en
     *
     * @return  self
     */ 
    public function setDesc_en($desc_en)
    {
        $this->desc_en = $desc_en;

        return $this;
    }

        /**
         * Get the value of desc_ar
         */ 
        public function getDesc_ar()
        {
                return $this->desc_ar;
        }

        /**
         * Set the value of desc_ar
         *
         * @return  self
         */ 
        public function setDesc_ar($desc_ar)
        {
                $this->desc_ar = $desc_ar;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of quantity
         */ 
        public function getQuantity()
        {
                return $this->quantity;
        }

        /**
         * Set the value of quantity
         *
         * @return  self
         */ 
        public function setQuantity($quantity)
        {
                $this->quantity = $quantity;

                return $this;
        }

        /**
         * Get the value of code
         */ 
        public function getCode()
        {
                return $this->code;
        }

        /**
         * Set the value of code
         *
         * @return  self
         */ 
        public function setCode($code)
        {
                $this->code = $code;

                return $this;
        }

        /**
         * Get the value of status
         */ 
        public function getStatus()
        {
                return $this->status;
        }

        /**
         * Set the value of status
         *
         * @return  self
         */ 
        public function setStatus($status)
        {
                $this->status = $status;

                return $this;
        }

        /**
         * Get the value of sub_category_id
         */ 
        public function getSub_category_id()
        {
                return $this->sub_category_id;
        }

        /**
         * Set the value of sub_category_id
         *
         * @return  self
         */ 
        public function setSub_category_id($sub_category_id)
        {
                $this->sub_category_id = $sub_category_id;

                return $this;
        }

        /**
         * Get the value of brand_id
         */ 
        public function getBrand_id()
        {
                return $this->brand_id;
        }

        /**
         * Set the value of brand_id
         *
         * @return  self
         */ 
        public function setBrand_id($brand_id)
        {
                $this->brand_id = $brand_id;

                return $this;
        }

        /**
         * Get the value of admin_id
         */ 
        public function getAdmin_id()
        {
                return $this->admin_id;
        }

        /**
         * Set the value of admin_id
         *
         * @return  self
         */ 
        public function setAdmin_id($admin_id)
        {
                $this->admin_id = $admin_id;

                return $this;
        }

        /**
         * Get the value of created_at
         */ 
        public function getCreated_at()
        {
                return $this->created_at;
        }

        /**
         * Set the value of created_at
         *
         * @return  self
         */ 
        public function setCreated_at($created_at)
        {
                $this->created_at = $created_at;

                return $this;
        }

        /**
         * Get the value of updated_at
         */ 
        public function getUpdated_at()
        {
                return $this->updated_at;
        }

        /**
         * Set the value of updated_at
         *
         * @return  self
         */ 
        public function setUpdated_at($updated_at)
        {
                $this->updated_at = $updated_at;

                return $this;
        }

        public function create(){}
        public function read(){}
        public function update(){}
        public function delete(){}
}
