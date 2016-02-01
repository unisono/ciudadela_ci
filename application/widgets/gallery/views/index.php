
    <style type="text/css">
   
        #container_show{
            width: 400px;
            float: left;
            margin-top: -343px;
        }
   #container_show #imgshow {
        float: left;
        width: 320px;
    }
   #container_show .imgdet {
        border:1px solid #e3e3e3;
        padding:2px;
    }
  #container_show  #imglist {
        float: right;
        width: 350px;
    }
   #container_show .imgfor {
        
        padding: 0px 0;
        margin: 25px 0 40px 0;
    }
   #container_show #fupload {
        margin: 0;
        border: 1px solid #e3e3e3;
        padding: 10px 0;
        text-align: center;
        margin-bottom: 10px;
    }
   #container_show .btnupload {
        border: 1px solid #e3e3e3;
        background: #f3f3f3;
        font-size: 11px;
        font-weight: bold;
        padding: 2px 5px;
    }
   #container_show .imgbox {
        text-align: center;
        width: 54px;
        height: 50px;
        float: left;
        margin: 0 0 15px 10px;
    }
   #container_show .thumb {
        border:1px solid #fff;
        padding:2px;
          width: 54px;
        height: 50px;
        
    }
   #container_show .thumb:hover {
        border-color: #0066cc;
    }
   #container_show .thumbclick {
        border:1px solid  #ff0000;
        padding:2px;
        width: 54px;
        height: 50px;
    }
   #container_show .dadel {
        margin-top: 2px;
    }
   #container_show .adel {
        color: #0066cc;
        font-size: 11px;
    }
   #container_show .adel:hover {
        background: #ff0000;
        color:#fff;
        text-decoration: none;
    }
    #container_show .clear {
        clear: both;
    }
   #container_show .error p {
        font-size: 11px;
        color: #ff0000;
        margin: 0;
        padding: 10px 0 0 0;
    }
  #container_show  .bottom {
        color: #666;
        font-weight: bold;
        font-size: 11px;
        text-align: center;
        border: 1px solid #e3e3e3;
        padding: 10px;
        margin-top: 10px;
    }
   #container_show .bottom a {
        color: #0066cc;
        font-size: 14px;
    }
   #container_show .bottom a:hover {
        text-decoration: none;
        color:#fff;
        background: #0066cc;
    }
    </style>
    <script type="text/javascript">
        function changepic(img_src, obj) {
            document["img_tag"].src = img_src;
            var thumbs = document.getElementsByName("thumb");
            for (var i = 0; i < thumbs.length; i++) {
                var tmp_id = "thumb_" + i;
                document.getElementById(tmp_id).setAttribute("class", "thumb");
            }
            document.getElementById(obj).setAttribute("class", "thumbclick");
            var ori_img = img_src.replace("thumb_", "");
            document.getElementById("detimglink").setAttribute("href", ori_img);
        }
    </script>
</head>
<body>

<div id="container_show">
    <div id="imgshow">
        <?php  foreach($im as $imgs) { ?>
      
            <img class="imgdet" name="img_tag" src="<?php echo base_url().'assets/uploads/mediums/'.$imgs['archivo']; ?>" />
      
        <?php break; } ?>
    </div>


        
        <div class="clear"></div>

        <div class="imgfor">
        <!-- Looping Array Image -->
       
        
         <?php foreach($im as $imgs) { ?>
        <div class="imgbox">
            <div>
               <a href="javascript:" onclick="changepic('<?php echo base_url().'assets/uploads/mediums/'.$imgs['archivo']; ?>', '<?php echo $imgs['id_multimedia']; ?>');">
                <img class="thumb"  name="thumb" id="thumb_<?php echo $imgs['id_multimedia']; ?>" src="<?php echo base_url().'assets/uploads/thumbnails/'.$imgs['archivo']; ?>"/>
               </a>
            </div>
<!--            <div class="dadel">
            <a class="adel" href="<?php echo site_url('image/delete/'.$img['original']); ?>">
                delete
            </a>
            </div>-->
        </div>
        <?php } ?>
        
        
        <div class="clear"></div>
        </div>
        <div class="clear"></div>

    </div>

    

