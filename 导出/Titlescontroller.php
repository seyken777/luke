<?php

public function search()
{
    if($this->request->getData('product name') !='')
    {
        $titles=$this->product_name->find('all')
            ->where(['product_name LIKE'=>"%".$this->request->getData('product_name')."%",'price<'=>$this->request->getData('product_sale_price')]);
            ->order(['product_id']);
    }
    else{
        $this->paginate= [
        'contain'=>['product_ID'],
        'order'=>['product_name']
    ];
        $titles=$this->paginate（$this->product_name）;
    }
    $this->set(compact('product_name'));
}