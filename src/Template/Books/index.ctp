<h2><?php echo __('Danh mục sách mới'); ?></h2>
<h4><?php echo $this->Html->link('Xem thêm' , '/sachmoi/') ?></h4>
<div class="books index large-9 medium-8 columns content">
    <?php 
    foreach ($books as $book) {
    	echo $book->title . "<br><br>";
    	echo $this->Html->image($book->image , array(
    			'width' => '120px' ,
    			'height' => '160px'
    	)) . "<br><br>";
    	echo "Giá bán: " . $this->Number->format($book->sale_price , array(
    			'places' => 0 ,
    			'after' => 'VND'
    	)) . "<br>";
    	echo "Tách giả: ";
    	foreach ($book->writers as $writer) { 
    		echo $writer->name . "        ";
    	}
    	echo "<hr>";
    }
    ?>
</div>
