<?php

namespace FakeVendor\Sandbox\Resource\App;

use BEAR\Resource\ResourceInterface;
use BEAR\Resource\ResourceObject;
use BEAR\SirenRenderer\Annotation\Action;
use BEAR\SirenRenderer\Annotation\EmbedResource;
use BEAR\SirenRenderer\Annotation\EmbedLink;

class Orders extends ResourceObject
{
    private $resource;

    public function __construct(ResourceInterface $resource)
    {
        $this->resource = $resource;
    }

    /**
     * @EmbedResource(rel="customer", src="app://self/customer{?customerId}")
     * @EmbedLink(rel="order-items", src="app://self/orderitem{?orderNumber}")
     * @Action(src="app://self/orderitem{?orderNumber}", method="post")
     *
     * @param $orderNumber
     * @return $this
     */
    public function onGet($orderNumber)
    {
        $this['orderNumber'] = $orderNumber;
        $this['itemCount'] = 3;
        $this['status'] = "pending";

        $customerId = "pj123";
        $this['customer']->addQuery(['customerId' => $customerId])->eager->request();

        return $this;
    }
}