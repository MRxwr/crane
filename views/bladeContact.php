<?php
if(isset($_POST['email']) && !empty($_POST['email']) ) {
    if(insertDB("get_in_touch",$_POST)) {
        ?>
        <script>
            alert("<?php echo direction("Your message has been sent successfully","تم ارسال رسالتك بنجاح") ?>");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("<?php echo direction("Please try again","الرجاء المحاولة مرة اخرى") ?>");
        </script>
        <?php
    }
}
?>
<div class="rightContent sides">
    <div class="rightContentBg"></div>
    <div class="rightContentDivs">
    <div class="row m-0">
        <div id="menuBtn" class='w-100'>
            <div class="row w-100" >
            <div class="col-10 text-left" >
                <div class="col-12 text-left" style="font-size:50px;font-weight:600">Crane<span class="craneDot">.</span></div>
            </div>
            <div class="col-2 text-right" style="align-content: center;">
                <svg data-toggle="modal" data-target="#fullscreenModal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill:white;width:25px;height:25px"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            </div>
            </div>
        </div>
        <div class="col-md-6 p-5">
            <div class="row">
                <div class="col-12 <?php echo direction("","text-right") ?>">
                    <h1><?php echo direction("Contact","تواصل") ?></h1>
                    <h5 style="font-weight:400"><?php echo direction($settings[0]["enContact"],$settings[0]["arContact"]) ?></h5>
                </div>
                <?php require_once("template/apps.php") ?>
            </div>
        </div>
        <div class="col-md-6 p-5">
            <h1><?php echo direction("Send us a message","ارسل لنا رسالة") ?></h1>
            <h5 style="font-weight:400"><?php echo direction("Don't worry we always reply to our customers.","لا تقلق نحن نرد على جميع العملاء.") ?></h5>
            <form action="" method="post">
            <div class="row m-0 pt-3" style="font-size:20px">
                <div class="col-12 p-1"><?php echo direction("Email","بريد الكتروني") ?></div>
                <div class="col-12 p-1"><input class='form-control' type='text' name="email" required></div>
                <div class="col-12 p-1"><?php echo direction("Your Message","رسالتك") ?></div>
                <div class="col-12 p-1"><textarea class='form-control' style='height:200px' name="message" required></textarea></div>
                <div class="col-12 p-1"><button class='btn btn-primary w-100'><?php echo direction("Send It !","ارسل") ?> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="fill:black;height:20px;width:20px"><path d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2v82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9V380.8c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/></svg></button></div>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>