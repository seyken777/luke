<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Famox</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="index.html" class="logo">
                <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Famox</span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <div class="titles name from large-9 medium-8 columns content">
        <? $this -> Form->create() ?>
        <fieldset>
            <legend><?= _( 'Search Product Name') ?></legend>
            <?php
                echo $this->Form->control('product name',['label'=>'product_name']);
                echo $this->Form->control('price',['label'=>'product_sale_price']);
                ?>
        </fieldset>
        <?= $this->Form->button(_('Search'))?>
        <?= $this->Form->end()?>
    </div>

    <div class="titles from large-9 medium-8 columns content">
        <table cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_purchase_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_sale_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_country_of_origin') ?></th>
                <th scope="col" class="actions"><?=_('Actions')?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($titles as $title):?>
            <tr>
                <td><?= h($title->product_id)?></td>
                <td><?= h($titles->product_name) ?></td>
                <td><?= $this->Number->format($title->product_purchase_price,['places'=>2,'before'=>'$']) ?></td>
                <td><?= $this->Number->format($title->product_sale_price,['places'=>2,'before'=>'$']) ?></td>
                <td><?= h($title->product_country_of_origin)?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>