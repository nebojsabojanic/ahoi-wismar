<?php

get_header('404'); ?>



<style>

html, body {
    height: 100%;
}
body {
    margin: 0;
}
.flex-container {
    height: 100%;
    padding: 0;
    margin: 0;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-items: center;
    justify-content: center;
}
.row {
    width: auto;
    text-align: center;
  
}
.flex-item {
    background-color: tomato;
    padding: 5px;
    width: 20px;
    height: 20px;
    margin: 10px;
    line-height: 20px;
    color: white;
    font-weight: bold;
    font-size: 2em;
    text-align: center;

}

h3{
    color: #277191;
    font-family: museo-slab, serif;
    font-size: 3.2rem;
    letter-spacing: 0.1rem;
    margin-top:4rem;
    text-align: center;
    font-weight: 500;
 
}

</style>
<div class="flex-container">
    <div class="row"> 
     
<?php $logo = get_field('logo', 'option'); ?>

                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                <h3>Website in Kürze</h3>

    </div>
</div>


        
<?php get_footer('404'); ?>