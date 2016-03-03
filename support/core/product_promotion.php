<style type="text/css">
.bstdl_img2 img {
  width: 150px;
  height: 150px;
}
</style>
<script src="<?php echo base_url('js/products.js'); ?>"></script>
<!--<script src="<?php echo base_url(); ?>js/jquery-1.10.2.js"></script>-->
<div class="container-fluid">
    <div class="row">
        <?php
       // error_reporting(E_All);
        //$image_path = "C:/wamp/www/gocomp/productuploads/image/thumbnails/";
        $image_path = "./uploads/image/thumbnails/";
        
		//$product_thub_image_url = 'http://www.gocomp.com.au/productuploads/image/thumbnails/';
        //$product_image_url = 'http://www.gocomp.com.au/productuploads/image/';
        $product_thub_image_url = base_url('uploads/image/thumbnails').'/';
		//$product_thub_image_url = base_url().'timthumb/timthumb.php?src='.base_url('uploads/image/thumbnails').'/';
        $product_image_url = base_url('uploads/image/').'/';

		if (count($new_item) > 0) {
/*            echo '<pre>';
            echo 'heading';
            print_r($heading);
            echo 'item';
            print_r($new_item);die;*/
            foreach ($heading as $headkey => $headval) {
                $displayheading = 0;
                foreach ($new_item as $itemKey => $item) {
                    $image = glob($image_path . clean_url($item['code']) . "*");
                    $data = '';
                    $product_image = '';
                    if (!empty($image)) {
                        if (count($image) == 1) {
                            $product_image = str_replace($image_path, $product_thub_image_url, $image[0]);
							//$product_image.='&q=100';
                        }
                        else
                            $product_image = base_url('images/default.png');
                    }
                    if ($product_image == '')
                        $product_image = base_url('images/default.png');
                    $item_id = $item['id'];
                    $itemcode = $this->mdl_common->displayDescription($item['code'], PRODUCT_CODE_LIMIT);
                    $itemcode = substr($itemcode, 8);
                    $tempstr = str_replace("/*", '<span style="color:red;"><b>', $item['itemdescription']);
                    $itemdescription = str_replace("*/", '</b></span>', $tempstr);
                    $itemDes_with_adnlDescrtn = $this->mdl_common->displayDescription($itemdescription, 10000);
                    $itemdescription = utf8_encode($itemDes_with_adnlDescrtn);
                    $displaytext = "";
                    $stock = "";
                    $roc_qty = ($item['roc_qty']) ? $item['roc_qty'] : 0;
                    $roc_rem_qty = ($item['roc_rem_qty']) ? $item['roc_rem_qty'] : 0;
                    $total_produact = count($new_item);
                    if ($item['roc_rem_qty'] != NULL)
                        $stock = $item['roc_qty'] - $item['roc_rem_qty'];
                    else
                        $stock = $item['roc_qty'];
                    $stock = round($stock);
                    if ($stock > 0) {
                        if ($stock >= 100) {
                            $displaytext = "100+";
                        } else if ($stock >= 10) {
                            $displaytext = "10+";
                        } else if ($stock >= 5) {
                            $displaytext = "<10";
                        } else if ($stock > 0) {
                            $displaytext = "<5";
                        }
                    } else {
                        $displaytext = '-';
                    }
                    $itemstock = $displaytext;
                    if (!empty($item['price'])) {
                        $price = $this->mdl_common->formatnumber($item['price']);
                        $gst = $item['price'] + ($item['price'] * GST) / 100;
                        $price_gst = $this->mdl_common->formatnumber($gst);
                    } else {
                        $price = 'NO_PRICE';
                    }
                    if (strcmp($item['query'], $headval['query']) == 0 && $displayheading == 0) {
                        ?>
                        <div class = "col-xs-4 blkhd"><?php echo $headval['heading']; ?></div><div class = "col-xs-12 blkblk bgitw">
                            <?php
                        }
                        if (strcmp($item['query'], $headval['query']) == 0) {
                            $displayheading = 1;
                            $DetailsLink = site_url('product/ProductDetails?itemid=' . $item_id) . '&catid=' . $category_id . '&action=product';
                            ?>
                            <div class = "col-xs-6 col-md-3 p1d">
                                <div class = "col-xs-12 bstdl2">
                                    <div class = "bstdl_img2"><img alt = "<?php echo $itemcode;?>" src = "<?php echo $product_image;?>"></div>
                                    <div class = "clearfix"></div>
                                    <div class = "bstdl_hd2"><a href = "<?php echo $DetailsLink; ?>"><?php echo $item_id;?> - <?php echo $itemcode?></a></div>
                                    <div class = "clearfix"></div>
                                    <div class = "bstdl_btmmodel2">Model: <span><?php echo $itemcode; ?></span></div>
                                    <div class = "clearfix"></div>
                                    <div class = "col-xs-12 bstdl_btm2">
                                        <div class = "col-xs-7 bstdl_btmprice2">Price: <span>$<?php echo $price;?></span></div>
                                        <div class = "col-xs-5 bstdl_addtocart navbar-right"><a href = "javascript:;" onclick="cart('<?php echo $item_id ?>', '<?php echo urlencode($itemdescription); ?>', '<?php echo $stock ?>', '<?php echo urlencode($item['code']) ?>', '<?php echo $price_gst ?>',this);">Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                }
                ?>
            </div>
        <?php
        }
    } else {
        ?>
                        <div class = "col-xs-6 col-md-3 p1d"><div class = "col-xs-12 blkblk bgitw">No Records Found!!!</div></div>
<?php } ?>
    <div class = "clearfix"></div>
    <div class = "col-xs-12 ppfno">
    </div>
</div>
</div>                    